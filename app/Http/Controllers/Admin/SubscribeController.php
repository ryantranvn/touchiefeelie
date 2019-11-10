<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Subscribe;

class SubscribeController extends Controller
{
    public function __construct()
    {
    }

    // index
    public function index(Request $request)
    {
    	$query = Subscribe::select('*')->orderBy('subscribe_id', 'desc');

        // sorting
        if ($request->has('sorting')) {
            $query->withSort($request->sorting, $request->by);
        }

        $subscribes = $query->paginate(15);

        return view(ADMIN.'.subscribe.index',
            compact('subscribes'));
    }

// destroy	
    public function destroy(Request $request, $subscribeId)
    {
        $subscribe = Subscribe::find($subscribeId);
        if (!$subscribe) {
            $request->session()->flash('danger', trans('lang.not_found_data'));
            return redirect(url(ADMIN.'/subscribe'));
        }
        DB::beginTransaction();
        try {
            $deleted = $subscribe->delete();
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
        return redirect(url(ADMIN.'/subscribe'));
    }
}