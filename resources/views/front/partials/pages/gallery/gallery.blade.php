<main class="gallery-page">
  <!-- FILTERS -->
  <div class="container">
    <div class="gallery-filters">
      <a href="#" data-filter="{{ $static_gallery->gallery_filter1_data_filter }}"
        class="filter active">{{ $static_gallery->gallery_filter1_text }}</a>
      <a href="#" data-filter="{{ $static_gallery->gallery_filter2_data_filter }}"
        class="filter">{{ $static_gallery->gallery_filter2_text }}</a>
      <a href="#" data-filter="{{ $static_gallery->gallery_filter3_data_filter }}"
        class="filter">{{ $static_gallery->gallery_filter3_text }}</a>
      <a href="#" data-filter="{{ $static_gallery->gallery_filter4_data_filter }}"
        class="filter">{{ $static_gallery->gallery_filter4_text }}</a>
      <a href="#" data-filter="{{ $static_gallery->gallery_filter5_data_filter }}"
        class="filter">{{ $static_gallery->gallery_filter5_text }}</a>
    </div>
  </div>
  <!-- GALLERY -->
  <div class="container">
    <div class="grid image-gallery row">
      @foreach ($galleries->shuffle() as $gallery)
        <div class="gallery-item {{ $gallery->class_filter }} col-md-3">
          <figure class="gradient-overlay image-icon">
            <a href="images/gallery/{{ $gallery->img }}">
              <img src="{{ asset('images/gallery/' . $gallery->img) }}" class="img-fluid" alt="Image">
            </a>
            <figcaption>{{ $gallery->figcaption }}</figcaption>
          </figure>
        </div>
      @endforeach
    </div>
  </div>
</main>
