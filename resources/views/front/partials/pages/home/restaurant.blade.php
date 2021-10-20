<section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg"
  data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_restaurant->section_title_h4 }}</h4>
      <p class="section-subtitle">{{ $static_restaurant->section_title_p }}</p>
    </div>
    <div class="row">
      @foreach ($restaurants as $restaurant)
        @if ($loop->iteration <= 4)
          <!-- ITEM -->
          <div class="col-md-6 col-sm-6 col-6">
            <div class="restaurant-menu-item">
              <div class="row">
                <div class="col-lg-4 col-12">
                  <figure>
                    <img src="{{ asset('images/restaurant/' . $restaurant->img) }}" class="img-fluid " alt="Image">
                  </figure>
                </div>
                <div class="col-lg-8 col-12">
                  <div class="info">
                    <div class="title">
                      <span class="name">{{ $restaurant->title_name }}</span>
                      <span class="price">
                        <span class="amount">{{ $restaurant->title_price }}</span>
                      </span>
                    </div>
                    <p>{{ $restaurant->text }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>
  </div>
</section>
