@if ($testimonials->count() > 0)
<section class="testimonials gray">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_testimonial->section_title_h4 }}</h4>
      <p class="section-subtitle">{{ $static_testimonial->section_title_p }}</p>
    </div>
    <div class="owl-carousel testimonials-owl">
      @foreach ($rooms as $room)
      @foreach ($room->reviews as $review)
      <div class="item">
        <div class="testimonial-item">
          <div class="author-img">
            <img alt="Image" class="img-fluid" src="{{ asset('images/users/' . $review->img) }}">
          </div>
          <div class="author">
            <h4 class="name">{{ $review->author_name }}</h4>
            <div class="location">{{ $review->author_location }}</div>
          </div>
          <div class="rating">
            @for ($i = 0; $i < $review->rating; $i++)
            <i class="fa {{ $review->rating_i_class }} voted" aria-hidden="true"></i>
            @endfor
            @for ($j = 0; $j < 5 - $review->rating; $j++)
            <i class="fa {{ $review->rating_i_class }}" aria-hidden="true"></i>
            @endfor
          </div>
          <p>{{ $review->text }}</p>
        </div>
      </div>
      @endforeach
      @endforeach
    </div>
  </div>
</section>
@endif