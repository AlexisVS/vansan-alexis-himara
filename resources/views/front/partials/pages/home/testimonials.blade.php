@if ($testimonials->count() > 0)
<section class="testimonials gray">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_testimonial->section_title_h4 }}</h4>
      <p class="section-subtitle">{{ $static_testimonial->section_title_p }}</p>
    </div>
    <div class="owl-carousel testimonials-owl">
      @foreach ($testimonials as $testimonial)
      <div class="item">
        <div class="testimonial-item">
          <div class="author-img">
            <img alt="Image" class="img-fluid" src="{{ asset('images/users/' . $testimonial->img) }}">
          </div>
          <div class="author">
            <h4 class="name">{{ $testimonial->author_name }}</h4>
            <div class="location">{{ $testimonial->author_location }}</div>
          </div>
          <div class="rating">
            @for ($i = 0; $i < $testimonial->rating; $i++)
              <i class="fa {{ $testimonial->rating_i_class }} voted" aria-hidden="true"></i>
              @endfor
              @for ($j = 0; $j < 5 - $testimonial->rating; $j++)
                <i class="fa {{ $testimonial->rating_i_class }}" aria-hidden="true"></i>
                @endfor
          </div>
          <p>{{ $testimonial->text }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif