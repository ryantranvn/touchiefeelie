<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class NewsController extends Controller
{
    public function index() {
    	$query = Post::select('*')
				->where('type', 'news');

    	$query->withSort('created_at', 'desc');
    	$posts = $query->get();

        return view(WEB . '/news/index', compact('posts'));
    }
    public function detail($newsSlug, Request $request) {
    	$slug = $request->segment(2);
    	$post = Post::select('*')->where('slug', $slug)->first();
    	if (empty($post)) {
    		return back();
    	}

    	$relatedPosts = Post::select('*')
    					->where('slug', '!=', $slug)
    					->where('type', 'news')
    					->get();
    					
        return view(WEB . '/news/detail', compact('post', 'relatedPosts'));
    }
}
