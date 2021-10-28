<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Page_blog_page_title;
use App\Models\Page_blog_sidebar;
use App\Models\Post;
use App\Models\Post_category;
use App\Models\Post_tag;
use Illuminate\Http\Request;

class Blog extends Controller
{
    public function index () {
        $data = [
            'static_pageTitle' => Page_blog_page_title::find(1),
            'static_sidebar' => Page_blog_sidebar::find(1),
            // 'posts' => Post::all(),
            'posts_tags' => Post_tag::all(),
            'posts_categories' => Post_category::all(),
            'blog_posts' => Post::paginate(2),
        ];

        // $posts = Post::find(1);
        // dd($posts->categories);

        return view('front.pages.blog', $data);
    }
}
