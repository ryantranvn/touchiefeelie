<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LibraryRequest;
use App\Post;
use DB;
use Auth;

class LibraryController extends Controller
{
    public function __construct()
    {
    }
// index
    public function index(Request $request)
    {
    	$query = Post::select('*')->where('type', 'library');

    	$query->withSort('created_at', 'desc');
        $query->withSort('updated_at', 'desc');

        $posts = $query->paginate(15);

    	return view(ADMIN.'.library.index',
            compact('posts'));
    }    
// create
    public function create(Request $request)
    {

    	return view(ADMIN.'.library.create',
            compact(''));
    }
// store
    public function store(LibraryRequest $request) 
    {
    	DB::beginTransaction();
        try {
            $post = new Post();
            $post->type = 'library';
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->author = $request->author;
            $post->thumbnail = $request->thumbnail;
            // $post->highlight = $request->highlight;
            $post->content = $request->content;
            $post->created_by = Auth::user()->user_id;
            $postSaved = $post->save();
            if (!$postSaved) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.create_fail'));
                return back();
            }
            DB::commit();
            $request->session()->flash('success', trans('lang.create_success'));
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.create_fail'));

            return back();
        }
        return redirect(url(ADMIN.'/library'));
    }
// edit
    public function edit($postId, Request $request)
    {
    	$post = Post::find($postId);
        if (!$post) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/library'));
        }

    	return view(ADMIN.'.library.edit',
            compact('post'));
    }
// update
    public function update($postId, LibraryRequest $request)
    {
    	$post = Post::find($postId);
        if (!$post) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return back();
        }
        $thumbnail = null;
        if ($request->has('thumbnail')) {
        	$thumbnail = $request->thumbnail;
        }
    	DB::beginTransaction();
        try {
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->author = $request->author;
            $post->thumbnail = $thumbnail;
            // $post->highlight = $request->highlight;
            $post->content = $request->content;
            $post->created_by = Auth::user()->user_id;
            $postSaved = $post->save();
            if (!$postSaved) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.edit_fail'));
                return back();
            }
            DB::commit();
            $request->session()->flash('success', trans('lang.edit_success'));
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.edit_fail'));

            return back();
        }
        return redirect(url(ADMIN.'/library'));
    }
// destroy
    public function destroy(Request $request, $postId)
    {
        $post = Post::find($postId);
        if (!$post) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/library'));
        }
        DB::beginTransaction();
        try {
            $deleted = $post->delete();
            if ($deleted == false) {
                DB::rollback();
                $request->session()->flash('danger', trans('lang.delete_fail'));
            }
            else {
                DB::commit();
                $request->session()->flash('success', trans('lang.edit_success'));
            }
        }
        catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', trans('lang.delete_fail'));
        }
        return redirect(url(ADMIN.'/library'));
    }
}
