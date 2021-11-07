<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\fontawesomeiconlist;
use App\Models\Page_blog_page_title;
use App\Models\Page_blog_sidebar;
use App\Models\Page_gallery;
use App\Models\Post;
use App\Models\Post_category;
use App\Models\Post_tag_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "blog_title" => Page_blog_page_title::all(),
            "blog_sidebar" => Page_blog_sidebar::all(),
            "posts" => Post::all(),
        ];

        return view('pages.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "categories" => Post_category::all(),
            "icons" => fontawesomeiconlist::all(),
        ];

        return view("pages.blog.create", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "figure_link_img" => "file",
            "title_text" => "required",
            "text" => "required",
            "author_img" => "file",
            "author_text" => "required",
            "date_i_class" => "required",
            "date_text" => "required",
            "comments_i_class" => "required",
            "comments_text" => "required",
            "post_category_id" => "required",
        ]);

        $store = new Post();

        if ($request->file('figure_link_img')) {
            Storage::disk('public')->put('images/blog', $request->file('figure_link_img'));
            $store->figure_link_img = $request->file('figure_link_img')->hashName();
        }

        $store->title_text = $request->title_text ;
        $store->text = $request->text ;
        if ($request->file('author_img')) {
            Storage::disk('public')->put('images/users', $request->file('author_img'));
            $store->author_img = $request->file('author_img')->hashName();
        }
        $store->author_text = $request->author_text ;
        $store->date_i_class = $request->date_i_class ;
        $store->date_text = $request->date_text ;
        $store->comments_i_class = $request->comments_i_class ;
        $store->comments_text = $request->comments_text ;
        $store->post_category_id = $request->post_category_id ;
        $store->save();

        return redirect("/dashboard/blog")->with("success", "The post has been created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'show' => Post::find($id),
        ];

        return view('pages.blog.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'edit' => Post::find($id),
            'categories' => Post_category::all(),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "figure_link_img" => "file",
            "title_text" => "required",
            "text" => "required",
            "author_img" => "file",
            "author_text" => "required",
            "date_i_class" => "required",
            "date_text" => "required",
            "comments_i_class" => "required",
            "comments_text" => "required",
            "post_category_id" => "required",
        ]);

        $update = Post::find($id);
        
        if ($request->file('figure_link_img')) {
            Storage::disk('public')->put('images/blog', $request->file('figure_link_img'));
            $update->figure_link_img = $request->file('figure_link_img')->hashName();
        }
        $update->title_text = $request->title_text ;
        $update->text = $request->text ;
        if ($request->file('author_img')) {
            Storage::disk('public')->put('images/users', $request->file('author_img'));
            $update->author_img = $request->file('author_img')->hashName();
        }
        $update->author_text = $request->author_text ;
        $update->date_i_class = $request->date_i_class ;
        $update->date_text = $request->date_text ;
        $update->comments_i_class = $request->comments_i_class ;
        $update->comments_text = $request->comments_text ;
        $update->post_category_id = $request->post_category_id ;
        $update->save();

        return redirect("/dashboard/blog")->with("success", "The post has been updated successfully.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editStaticTitle()
    {
        $data = [
            'edit' => Page_blog_page_title::find(1),
        ];

        return view('pages.blog.static.title.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStaticTitle(Request $request)
    {
        $request->validate([
            "img" => "file",
            "title" => "required",
            "li" => "required",

        ]);

        $update = Page_blog_page_title::find(1);

        if ($request->file('img')) {
            Storage::disk('public')->put('images/', $request->file('img'));
            $update->img = $request->file('img')->hashName();
        }
        $update->title = $request->title ;
        $update->li = $request->li ;
        $update->save();

        return redirect("/dashboard/blog")->with("success", "The static blog title has been updated successfully.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editStaticSidebar()
    {
        $data = [
            'edit' => Page_blog_sidebar::find(1),
            'icons' => fontawesomeiconlist::all(),
        ];

        return view('pages.blog.static.sidebar.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStaticSidebar(Request $request)
    {
        $request->validate([

            "search_placeholder" => "required",
            "search_btn_i_class" => "required",
            "categories_title" => "required",
            "latest_posts_title" => "required",
            "tags_title" => "required",
        ]);

        $update = Page_blog_sidebar::find(1);
        $update->search_placeholder = $request->search_placeholder ;
        $update->search_btn_i_class = $request->search_btn_i_class ;
        $update->categories_title = $request->categories_title ;
        $update->latest_posts_title = $request->latest_posts_title ;
        $update->tags_title = $request->tags_title ;
        $update->save();

        return redirect("/dashboard/blog")->with("success", "The static blog sidebar has been updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $postTags = Post_tag_post::where('post_id', $id);
        
        foreach ($postTags as $postTag) {
            $postTag->delete();
        }
        $destroy = Post::find($id);
        $destroy->delete();

        return redirect('/dashboard/blog')->with('success', "The post has been correctly deleted.");
    }
}
