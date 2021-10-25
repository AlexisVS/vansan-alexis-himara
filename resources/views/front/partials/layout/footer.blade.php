<footer>
  <div class="footer-widgets">
    <div class="container">
      <div class="row">
        <!-- WIDGET -->
        <div class="col-md-3">
          <div class="footer-widget">
            <img src="{{ asset('images/' . $footer->w1_logo) }}" class="footer-logo" alt="Hotel Himara">
            <div class="inner">
              <p>{{ $footer->w1_inner_text }}</p>
              <a href="{{ $footer->w1_a_href }}" target="_blank">
                <div class="tripadvisor-banner">
                  <span class="review">{{ $footer->w1_a_span }}</span>
                  <img src="{{ asset('images/icons/' . $footer->w1_a_img) }}" alt="Image">
                </div>
              </a>
            </div>
          </div>
        </div>
        <!-- WIDGET -->
        <div class="col-md-3">
          <div class="footer-widget">
            <h3>{{ $footer->w2_h3 }}</h3>
            <div class="inner">
              <ul class="latest-posts">
                {{-- /*  -------------------------------- Dynamique ------------------------------- */ --}}
                @foreach ($rooms as $room)
                  @if ($loop->iteration < 5)
                    <li>
                      <a href="/room/{{ $room->id }}">{{ $room->name }}</a>
                    </li>
                  @endif
                @endforeach
                {{-- /* -------------------------------------------------------------------------- */ --}}
              </ul>
            </div>
          </div>
        </div>
        <!-- WIDGET -->
        <div class="col-md-3">
          <div class="footer-widget">
            <h3>{{ $footer->w3_h3 }}</h3>
            <div class="inner">
              <ul class="useful-links">
                <li>
                  <a href="{{ $footer->w3_a1_href }}">{{ $footer->w3_a1_text }}</a>
                </li>
                <li>
                  <a href="{{ $footer->w3_a2_href }}">{{ $footer->w3_a2_text }}</a>
                </li>
                <li>
                  <a href="{{ $footer->w3_a3_href }}">{{ $footer->w3_a3_text }}</a>
                </li>
                <li>
                  <a href="{{ $footer->w3_a4_href }}">{{ $footer->w3_a4_text }}</a>
                </li>
                <li>
                  <a href="{{ $footer->w3_a5_href }}">{{ $footer->w3_a5_text }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- WIDGET -->
        <div class="col-md-3">
          <div class="footer-widget">
            <h3>{{ $footer->w4_h3 }}</h3>
            <div class="inner">
              <ul class="contact-details">
                <li>
                  <i class="fa {{ $footer->w4_li1_i_class }}" aria-hidden="true"></i>
                  {{ $footer->w4_li1_text }}
                </li>
                <li>
                  <i class="fa {{ $footer->w4_li2_i_class }}" aria-hidden="true"></i>
                  {{ $footer->w4_li2_text }}
                </li>
                <li>
                  <i class="fa {{ $footer->w4_li3_i_class }}"></i>
                  {{ $footer->w4_li3_text }}
                </li>
                <li>
                  <i class="fa {{ $footer->w4_li4_i_class }}"></i>
                  {{ $footer->w4_li4_text }}
                </li>
                <li>
                  <i class="fa {{ $footer->w4_li5_i_class }}"></i>
                  {{ $footer->w4_li5_text }}
                  <a href="{{ $footer->w4_li5_li_text }}">{{ $footer->w4_li5_a_text }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SUBFOOTER -->
  <div class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="copyrights">{{ $footer->sf_copyright }}
            <a href="{{ $footer->sf_copyright_href }}" target="_blank">{{ $footer->sf_copyright_text }}</a>.
          </div>
        </div>
        <div class="col-md-6">
          <div class="social-media">
            <a class="{{ $footer->sf_sm_facebook_class }}"
              data-original-title="{{ $footer->sf_sm_facebook_title }}" data-toggle="tooltip"
              href="{{ $footer->sf_sm_facebook_href }}">
              <i class="fa {{ $footer->sf_sm_facebook_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_twitter_class }}" data-original-title="{{ $footer->sf_sm_twitter_title }}"
              data-toggle="tooltip" href="{{ $footer->sf_sm_twitter_href }}">
              <i class="fa {{ $footer->sf_sm_twitter_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_googleplus_class }}"
              data-original-title="{{ $footer->sf_sm_googleplus_title }}" data-toggle="tooltip"
              href="{{ $footer->sf_sm_googleplus_href }}">
              <i class="fa {{ $footer->sf_sm_googleplus_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_pinterest_class }}"
              data-original-title="{{ $footer->sf_sm_pinterest_title }}" data-toggle="tooltip"
              href="{{ $footer->sf_sm_pinterest_href }}">
              <i class="fa {{ $footer->sf_sm_pinterest_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_linkedin_class }}"
              data-original-title="{{ $footer->sf_sm_linkedin_title }}" data-toggle="tooltip"
              href="{{ $footer->sf_sm_linkedin_href }}">
              <i class="fa {{ $footer->sf_sm_linkedin_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_youtube_class }}" data-original-title="{{ $footer->sf_sm_youtube_title }}"
              data-toggle="tooltip" href="{{ $footer->sf_sm_youtube_href }}">
              <i class="fa {{ $footer->sf_sm_youtube_i_class }}"></i>
            </a>
            <a class="{{ $footer->sf_sm_instagram_class }}"
              data-original-title="{{ $footer->sf_sm_instagram_title }}" data-toggle="tooltip"
              href="{{ $footer->sf_sm_instagram_href }}">
              <i class="fa {{ $footer->sf_sm_instagram_i_class }}"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
