@if ($posts->count() > 0)
<section class="news">
  <div class="container">
    <div class="section-title">
      <h4 class="title">{{ $static_new->section_title_h4 ?? '' }} <span class="text-himara">{{ $static_new->section_title_span ?? ''
      }}</span> {{ $static_new->section_title_h4_after ?? '' }}</h4>
      <p class="section-subtitle">{{ $static_new->section_title_p }}</p>
    </div>
    <div class="row">
      <!-- ITEM -->
      @foreach ($posts->sortDesc()->take(3) as $post)
      <div class="col-md-4">
        <div class="news-grid-item">
          <figure class="gradient-overlay-hover link-icon">
            <a href="/blog-post">
              <img src="{{ asset('images/blog/' . $post->figure_link_img) }}" class="img-fluid" alt="Image">
            </a>
          </figure>
          <div class="news-info">
            <h4 class="title">
              <a href="/blog-post">{{ $post->title_text }}</a>
            </h4>
            <p>{{ $post->text }}</p>
            <div class="post-meta">
              <span class="author">
                <a href="#"><img src="{{ asset('images/users/' . $post->author_img) }}" width="16" alt="Image">
                  {{ $post->author_text }}</a>
              </span>
              <span class="date">
                <i class="fa {{ $post->date_i_class }}"></i>
                {{ $post->date_text }}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif