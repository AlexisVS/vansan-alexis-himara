<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_blog_page_title;
use App\Models\Page_blog_sidebar;
use App\Models\Post;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index () {
        $data = [
            'static_pageTitle' => Page_blog_page_title::find(1),
            'static_sidebar' => Page_blog_sidebar::find(1),
            'posts' => Post::all(),
        ];

        return view('front.pages.blog', $data);
    }
}
