<div class="sidebar">
  <aside class="widget noborder">
    <div class="search">
      <form class="widget-search">
        <input type="search" placeholder="{{ $static_sidebar->search_placeholder }}">
        <button class="btn-search" id="searchsubmit" type="submit">
          <i class="fa {{ $static_sidebar->search_btn_i_class }}"></i>
        </button>
      </form>
    </div>
  </aside>
  <!-- WIDGET -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_sidebar->categories_title }}</h4>
    <ul class="categories">
      {{-- // item --}}
      <li>
        <a href="#">Travel<span class="posts-num">51</span></a>
      </li>
      {{-- // item --}}
      <li>
        <a href="#">Rooms<span class="posts-num">24</span></a>
      </li>
      {{-- // item --}}
      <li>
        <a href="#">Holidays<span class="posts-num">9</span></a>
      </li>
      {{-- // item --}}
      <li>
        <a href="#">Travel<span class="posts-num">12</span></a>
      </li>
      {{-- // item --}}
      <li>
        <a href="#">Events<span class="posts-num">28</span></a>
      </li>
    </ul>
  </aside>
  <!-- WIDGET -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_sidebar->latest_posts_title }}</h4>
    <div class="latest-posts">
      <!-- ITEM -->
      <div class="latest-post-item">
        <div class="row">
          <div class="col-5">
            <figure class="gradient-overlay-hover link-icon sm">
              <a href="blog-post.html">
                <img src="images/blog/blog-post1.jpg" class="img-fluid" alt="Image">
              </a>
            </figure>
          </div>
          <div class="col-7">
            <div class="post-details">
              <h6 class="post-title">
                <a href="blog-post.html">10 Tips for Holiday Travel</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <!-- ITEM -->
      <div class="latest-post-item">
        <div class="row">
          <div class="col-5">
            <figure class="gradient-overlay-hover link-icon sm">
              <a href="blog-post.html">
                <img src="images/blog/blog-post2.jpg" class="img-fluid" alt="Image">
              </a>
            </figure>
          </div>
          <div class="col-7">
            <div class="post-details">
              <h6 class="post-title">
                <a href="blog-post.html">Are you ready to enjoy your holidays</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <!-- ITEM -->
      <div class="latest-post-item">
        <div class="row">
          <div class="col-5">
            <figure class="gradient-overlay-hover link-icon sm">
              <a href="blog-post.html">
                <img src="images/blog/blog-post3.jpg" class="img-fluid" alt="Image">
              </a>
            </figure>
          </div>
          <div class="col-7">
            <div class="post-details">
              <h6 class="post-title">
                <a href="blog-post.html">Honeymoon in Hotel Himara</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <!-- ITEM -->
      <div class="latest-post-item">
        <div class="row">
          <div class="col-5">
            <figure class="gradient-overlay-hover link-icon sm">
              <a href="blog-post.html">
                <img src="images/blog/blog-post4.jpg" class="img-fluid" alt="Image">
              </a>
            </figure>
          </div>
          <div class="col-7">
            <div class="post-details">
              <h6 class="post-title">
                <a href="blog-post.html">Travel Gift Ideas for Every Type of Traveler</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
      <!-- ITEM -->
      <div class="latest-post-item">
        <div class="row">
          <div class="col-5">
            <figure class="gradient-overlay-hover link-icon sm">
              <a href="blog-post.html">
                <img src="images/blog/blog-post5.jpg" class="img-fluid" alt="Image">
              </a>
            </figure>
          </div>
          <div class="col-7">
            <div class="post-details">
              <h6 class="post-title">
                <a href="blog-post.html">Breakfast with coffee and orange juic</a>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <!-- WIDGET -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_sidebar->tags_title }}</h4>
    <div class="tagcloud">
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Party</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Travel</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Wedding</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Food</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Music</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">City</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Image</span>
      </a>
      <!-- ITEM -->
      <a href="#">
        <span class="tag">Hotel</span>
      </a>
    </div>
  </aside>
</div>
