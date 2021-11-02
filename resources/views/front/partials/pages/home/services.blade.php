@if ($services->count() > 0 )
<section class="services">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_service->section_title_h4 }}<span class="text-himara">{{ $static_service->section_title_span
          }}</span></h4>
      <p class="section-subtitle">{{ $static_service->section_title_text }}</p>
    </div>
    <div class="row">
      <div class="col-lg-7 col-12">
        <div data-slider-id="services" class="services-owl owl-carousel">
          @foreach ($services as $service)
          <figure class="gradient-overlay">
            <img src={{ asset('images/services/' . $service->fig_img) }} class="img-fluid" alt="Image">
            <figcaption>
              <h4>{{ $service->fig_title }}</h4>
            </figcaption>
          </figure>
          @endforeach
        </div>
      </div>
      <div class="col-lg-5 col-12">
        <div class="owl-thumbs" data-slider-id="services">
          @foreach ($services as $service)
          <div class="owl-thumb-item">
            <span class="media-left">
              <i class="{{ $service->slider_i_flaticon }}"></i>
            </span>
            <div class="media-body">
              <h5>{{ $service->slider_title }}</h5>
              <p>{{ $service->slider_text }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@endif