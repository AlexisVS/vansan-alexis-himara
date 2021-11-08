<section class="about mt100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title">
          <h4 class="text-uppercase">{{ $static_about->section_title_title ?? '' }} <span class="text-himara">{{
              $static_about->section_title_title_span ?? '' }} </span>{{ $static_about->section_title_title_after ?? '' }}</h4>
          <p class="section-subtitle">{{ $static_about->section_title_section_subtitle }}</p>
        </div>
        <div class="info-branding">
          <p>{{ $static_about->info_branding_p }}</p>
          <div class="providers">
            <span>{{ $static_about->providers_text }}</span>
            @foreach ($aboutProviders as $aboutProvider)
            <!-- ITEM -->
            <div class="item">
              <a href="{{ $aboutProvider->provider_href }}">
                <img src={{ asset('images/providers/' . $aboutProvider->provider_img) }} alt="Image">
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="brand-info">
          <div class="inner">
            <div class="content">
              <img src="{{ asset('images/' . $static_about->content_img) }}" width="100" alt="Image">
              <div class="stars">
                <i class="fa {{ $static_about->content_star_i_class }}" aria-hidden="true"></i>
                <i class="fa {{ $static_about->content_star_i_class }}" aria-hidden="true"></i>
                <i class="fa {{ $static_about->content_star_i_class }}" aria-hidden="true"></i>
                <i class="fa {{ $static_about->content_star_i_class }}" aria-hidden="true"></i>
                <i class="fa {{ $static_about->content_star_i_class }}" aria-hidden="true"></i>
              </div>
              <h5 class="title">{{ $static_about->content_title }}</h5>
              <p class="mt20">{{ $static_about->content_text }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>