<div class="sidebar">
  <div class="google-map">
    <div class="toggle-streetview" id="openStreetView">
      <i class="fa {{ $static_contact->sidebar_map_i_class }}" aria-hidden="true"></i>
    </div>
    <div id="map-canvas"></div>
  </div>
  <div class="contact-details mt75">
    <div class="contact-info">
      <ul>
        <li>
          <a href="{{ $static_contact->sidebar_info_li1_a_href }}">
            <i
              class="fa {{ $static_contact->sidebar_info_li1_i_class }}"></i>{{ $static_contact->sidebar_info_li1_text }}</a>
        </li>
        <li>
          <a href="{{ $static_contact->sidebar_info_li2_a_href }}">
            <i
              class="fa {{ $static_contact->sidebar_info_li2_i_class }}"></i>{{ $static_contact->sidebar_info_li2_text }}</a>
        </li>
        <li>
          <a href="{{ $static_contact->sidebar_info_li3_a_href }}">
            <i
              class="fa {{ $static_contact->sidebar_info_li3_i_class }}"></i>{{ $static_contact->sidebar_info_li3_text }}</a>
        </li>
        <li>
          <a href="{{ $static_contact->sidebar_info_li4_a_href }}">
            <i
              class="fa {{ $static_contact->sidebar_info_li4_i_class }}"></i>{{ $static_contact->sidebar_info_li4_text }}</a>
        </li>
        <li>
          <a href="{{ $static_contact->sidebar_info_li5_a_href }}">
            <i
              class="fa {{ $static_contact->sidebar_info_li5_i_class }}"></i>{{ $static_contact->sidebar_info_li5_text }}</a>
        </li>
      </ul>
    </div>
    <div class="social-media mt50">
      <a class="facebook" data-original-title="{{ $static_contact->sidebar_social_facebook_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_facebook_href }}">
        <i class="fa {{ $static_contact->sidebar_social_facebook_i_class }}"></i>
      </a>
      <a class="twitter" data-original-title="{{ $static_contact->sidebar_social_twitter_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_twitter_href }}">
        <i class="fa {{ $static_contact->sidebar_social_twitter_i_class }}"></i>
      </a>
      <a class="googleplus" data-original-title="{{ $static_contact->sidebar_social_googleplus_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_googleplus_href }}">
        <i class="fa {{ $static_contact->sidebar_social_googleplus_i_class }}"></i>
      </a>
      <a class="pinterest" data-original-title="{{ $static_contact->sidebar_social_pinterest_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_pinterest_href }}">
        <i class="fa {{ $static_contact->sidebar_social_pinterest_i_class }}"></i>
      </a>
      <a class="linkedin" data-original-title="{{ $static_contact->sidebar_social_linkedin_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_linkedin_href }}">
        <i class="fa {{ $static_contact->sidebar_social_linkedin_i_class }}"></i>
      </a>
      <a class="youtube" data-original-title="{{ $static_contact->sidebar_social_youtube_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_youtube_href }}">
        <i class="fa {{ $static_contact->sidebar_social_youtube_i_class }}"></i>
      </a>
      <a class="tripadvisor" data-original-title="{{ $static_contact->sidebar_social_tripadvisor_title }}"
        data-toggle="tooltip" href="{{ $static_contact->sidebar_social_tripadvisor_href }}">
        <i class="fa {{ $static_contact->sidebar_social_tripadvisor_i_class }}"></i>
      </a>
    </div>
  </div>
</div>
