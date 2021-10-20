<section class="video np parallax gradient-overlay op6" data-src="{{ asset('images/' . $static_video->video_src) }}"
  data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
  <div class="inner gradient-overlay">
    <div class="container">
      <div class="video-popup">
        <a class="popup-vimeo" href="{{ $static_video->video_href }}">
          <i class="fa {{ $static_video->video_i_class }}"></i>
        </a>
      </div>
    </div>
  </div>
</section>
