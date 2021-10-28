<!-- POSTS -->
<div class="blog-posts">
  <!-- POST -->
  @foreach ($blog_posts as $post)
    
  <article class="post">
    <div class="row">
      <div class="col-sm-4">
        <div class="post-thumbnail">
          <figure class="gradient-overlay-hover link-icon">
            <a href="/blog-post">
              <img src="{{ asset('images/blog/' . $post->figure_link_img) }}" class="img-fluid" alt="Image">
            </a>
          </figure>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="post-details">
          <h2 class="post-title">
            <a href="/blog-post">{{ $post->title_text }}</a>
          </h2>
          <div class="post-meta">
            <span class="author">
              <a href="#"><img src="{{ asset('images/users/' . $post->author_img) }}" width="16" alt="Image">{{ $post->author_text }}</a>
            </span>
            <span class="date">
              <a href="#">
                <i class="fa {{ $post->date_i_class }}"></i>{{ $post->date_text }}</a>
              </span>
              {{-- <span class="comments">
                <a href="#">
                  <i class="fa fa-commenting-o"></i>1 Comment</a>
                </span>
                <span class="category">
                  <i class="fa fa-folder-open-o"></i>IN
                  <a href="#">News</a>,
                  <a href="#">Events</a>
                </span> --}}
              </div>
              <p>{{ $post->text }}</p>
              </div>
            </div>
          </div>
        </article>
        @endforeach

</div>
<!-- ========== PAGINATION ========== -->
{{ $blog_posts->links() }}
