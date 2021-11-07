<div class="col-lg-3 col-12">
  <div class="sidebar">
    <div class="contact-details">
      <div class="section-title">
        <h4>{{ $static_bookingForm->sidebar_title }}</h4>
        <p class="section-subtitle">{{ $static_bookingForm->sidebar_subtitle }}</p>
      </div>
      @foreach ($bookingFormOffers as $bookingFormOffer)
      <div class="offer-item sm mb50">
        <figure class="gradient-overlay-hover link-icon">
          <a href="/room/{{ $bookingFormOffer->room_id ?? '' }}">
            <img src="{{ asset('images/offers/' . $bookingFormOffer->img) }}" class="img-fluid" alt="Image">
          </a>
        </figure>
        <div class="ribbon">
          <span>{{ $bookingFormOffer->ribbon }}</span>
        </div>
        <div class="offer-price uppercase">
          {{ $bookingFormOffer->offer_price }}
        </div>
        <h3 class="offer-title">
          <a href="/room/{{ $bookingFormOffer->room_id ?? '' }}">{{ $bookingFormOffer->offer_title }}</a>
        </h3>
      </div>
      @endforeach
    </div>
  </div>
</div>
