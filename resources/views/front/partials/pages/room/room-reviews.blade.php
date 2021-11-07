@if($show->reviews->count())
  
<div id="room-reviews" class="room-reviews">
  <div class="section-title sm">
    <h4>{{ $static_room->reviews_title }}</h4>
    <p class="section-subtitle">{{ $static_room->reviews_subtitle }}</p>
  </div>
  <div class="rating-details">
    <div class="row">
      <div class="col-lg-3">
        <div class="review-summary">
          <div class="average">
            @php
            $review = $show->reviews->pluck('rating')->flatten();
            echo number_format($review->sum() / $review->count(), 1)
            @endphp
          </div>
          <div class="rating">
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star voted" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
          <small>Based on {{ $show->reviews->count() }} ratings</small>
        </div>
      </div>
      <div class="col-lg-9">
        <!-- ITEM -->
        <div class="progress-item">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-3">
              <div class="progress-stars">{{ $static_room->reviews_5star }}</div>
            </div>
            <div class="col-lg-9 col-sm-9 col-8">
              <div class="progress">
                <div class="progress-bar" role="progressbar"
                style="width: {{ number_format($show->reviews->where('rating', 5)->count() / $show->reviews->count() * 100, 2) }}%"
                aria-valuenow="{{ number_format($show->reviews->where('rating', 5)->count() / $show->reviews->count() * 100, 2) }}"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-1">
              <div class="progress-value">{{ number_format($show->reviews->where('rating', 5)->count() /
                $show->reviews->count() * 100, 2) }}%</div>
            </div>
          </div>
        </div>
        <!-- ITEM -->
        <div class="progress-item">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-3">
              <div class="progress-stars">{{ $static_room->reviews_4star }}</div>
            </div>
            <div class="col-lg-9 col-sm-9 col-8">
              <div class="progress">
                <div class="progress-bar" role="progressbar"
                style="width: {{ number_format($show->reviews->where('rating', 4)->count() / $show->reviews->count() * 100, 2) }}%"
                aria-valuenow="{{ number_format($show->reviews->where('rating', 4)->count() / $show->reviews->count() * 100, 2) }}"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-1">
              <div class="progress-value">{{ number_format($show->reviews->where('rating', 4)->count() /
                $show->reviews->count() * 100, 2) }}%</div>
            </div>
          </div>
        </div>
        <!-- ITEM -->
        <div class="progress-item">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-3">
              <div class="progress-stars">{{ $static_room->reviews_3star }}</div>
            </div>
            <div class="col-lg-9 col-sm-2 col-8">
              <div class="progress">
                <div class="progress-bar" role="progressbar"
                style="width: {{ number_format($show->reviews->where('rating', 3)->count() / $show->reviews->count() * 100, 2) }}%"
                aria-valuenow="{{ number_format($show->reviews->where('rating', 3)->count() / $show->reviews->count() * 100, 2) }}"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-1">
              <div class="progress-value">{{ number_format($show->reviews->where('rating', 3)->count() /
                $show->reviews->count() * 100, 2) }}%</div>
            </div>
          </div>
        </div>
        <!-- ITEM -->
        <div class="progress-item">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-3">
              <div class="progress-stars">{{ $static_room->reviews_2star }}</div>
            </div>
            <div class="col-lg-9 col-sm-9 col-8">
              <div class="progress">
                <div class="progress-bar" role="progressbar"
                style="width: {{ number_format($show->reviews->where('rating', 2)->count() / $show->reviews->count() * 100, 2) }}%"
                aria-valuenow="{{ number_format($show->reviews->where('rating', 2)->count() / $show->reviews->count() * 100, 2) }}"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-1">
              <div class="progress-value">{{ number_format($show->reviews->where('rating', 2)->count() /
                $show->reviews->count() * 100, 2) }}%</div>
            </div>
          </div>
        </div>
        <!-- ITEM -->
        <div class="progress-item">
          <div class="row">
            <div class="col-lg-2 col-sm-2 col-3">
              <div class="progress-stars">{{ $static_room->reviews_1star }}</div>
            </div>
            <div class="col-lg-9 col-sm-9 col-8">
              <div class="progress">
                <div class="progress-bar" role="progressbar"
                style="width: {{ number_format($show->reviews->where('rating', 1)->count() / $show->reviews->count() * 100, 2) }}%"
                aria-valuenow="{{ number_format($show->reviews->where('rating', 1)->count() / $show->reviews->count() * 100, 2) }}"
                aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-lg-1 col-sm-1 col-1">
              <div class="progress-value">{{ number_format($show->reviews->where('rating', 1)->count() /
                $show->reviews->count() * 100, 2) }}%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @foreach ($show->reviews as $review )
  
  <div class="review-box {{ $loop->iteration > 1 ? 'clearfix' : '' }}">
    <figure class="review-author">
      <img src={{ asset("images/users/" . $review->userImage_img) }} alt="Image">
    </figure>
    <div class="review-contentt">
      <div class="rating">
        @for ($i = 0; $i < $review->rating; $i++)
        <i class="fa {{ $review->rating_i_class }} voted" aria-hidden="true"></i>
        @endfor
        @for ($j = 0; $j < 5 - $review->rating; $j++)
        <i class="fa {{ $review->rating_i_class }}" aria-hidden="true"></i>
        @endfor
      </div>
      <div class="review-info">
        {{ $review->review_info . ' – ' . $review->review_date }}
      </div>
      <div class="review-text">
        <p>
          {{ $review->review_text }}
        </p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endif