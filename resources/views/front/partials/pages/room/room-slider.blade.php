<div class="room-slider">
  <div id="room-main-image" class="owl-carousel image-gallery">
    @foreach ($show->images as $image)
    <div class="item">
      <figure class="gradient-overlay-hover image-icon">
        <a href="{{ asset('images/rooms/single/' . $image->image) }}">
          <img class="img-fluid" src="{{ asset('images/rooms/single/' . $image->image) }}" alt="Image">
        </a>
      </figure>
    </div>
    @endforeach
  </div>
  <div id="room-thumbs" class="room-thumbs owl-carousel">
    @foreach ($show->images as $image)
    <!-- ITEM -->
    <div class="item"><img class="img-fluid" src="{{ asset('images/rooms/single/' . $image->image) }}" alt="Image">
    </div>
    @endforeach
  </div>
</div>