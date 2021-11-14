<div class="sidebar">
  <aside class="widget noborder">
    <div class="search">
      <form class="widget-search">
        <input type="search" placeholder="{{ $static_page->sidebar_search_placeholder }}">
        <button class="btn-search" id="searchsubmit" type="submit">
          <i class="fa {{ $static_page->sidebar_i_class }}"></i>
        </button>
      </form>
    </div>
  </aside>
  <aside class="widget">
    <h4 class="widget-title">{{ $static_page->sidebar_widget1_name }}</h4>
    <ul class="categories">
      @foreach ($posts_categories as $posts_category)
        <li>
          <a href="#">{{ $posts_category->name }}<span
              class="posts-num">{{ $posts_category->post_number }}</span></a>
        </li>
      @endforeach
    </ul>
  </aside>
  <!-- WIDGET -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_page->sidebar_widget2_name }}</h4>
    <div class="latest-posts">
      @foreach ($posts->sortDesc()->take(3) as $post)
        <div class="latest-post-item">
          <div class="row">
            <div class="col-5">
              <figure class="gradient-overlay-hover link-icon sm">
                <a href="/page">
                  <img src="{{ 'images/blog/' . $post->figure_link_img }}" class="img-fluid" alt="Image">
                </a>
              </figure>
            </div>
            <div class="col-7">
              <div class="post-details">
                <h6 class="post-title">
                  <a href="/page">{{ $post->title_text }}</a>
                </h6>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </aside>
  <aside class="widget">
    <h4 class="widget-title">{{ $static_page->sidebar_widget3_name }}</h4>
    <div class="tagcloud">
      @foreach ($posts_tags as $posts_tag)
        <a href="#">
          <span class="tag">{{ $posts_tag->name }}</span>
        </a>
      @endforeach
    </div>
  </aside>
</div>
