<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index() 
    {
    	$query = Post::select('*')
				->where('type', 'blog');

    	$query->withSort('created_at', 'desc');
    	$posts = $query->get();

        return view(WEB . '/blog/index', compact('posts'));
    }
    public function detail(Request $request) 
    {
    	$slug = $request->segment(2);
    	$post = Post::select('*')->where('slug', $slug)->first();
        if (empty($post)) {
            return back();
        }

    	$relatedPosts = Post::select('*')
    					->where('slug', '!=', $slug)
    					->where('type', 'blog')
    					->get();

        return view(WEB . '/blog/detail', compact('post', 'relatedPosts'));
    }
}
