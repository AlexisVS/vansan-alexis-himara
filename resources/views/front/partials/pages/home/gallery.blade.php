@if ($galleries->count() > 0)
<section class="gallery">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_gallery->section_title_h4 ?? '' }} <span class="text-himara">{{ $static_gallery->section_title_span ?? ''
          }}</span> {{ $static_gallery->section_title_h4_after ?? '' }}</h4>
      <p class="section-subtitle">{{ $static_gallery->section_title_subtitle }}</p>
      <a href="{{ $static_gallery->section_title_a_href }}" class="view-all">{{ $static_gallery->section_title_a_text
        }}</a>
    </div>
    <div class="gallery-owl owl-carousel image-gallery">
      @foreach ($galleries->shuffle() as $gallery)
      <!-- ITEM -->
      <div class="gallery-item">
        <figure class="gradient-overlay image-icon">
          <a href="images/gallery/{{ $gallery->img }}">
            <img src="{{ asset('images/gallery/' . $gallery->img ) }}" alt="Image">
          </a>
          <figcaption>{{ $gallery->figcaption }}</figcaption>
        </figure>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif