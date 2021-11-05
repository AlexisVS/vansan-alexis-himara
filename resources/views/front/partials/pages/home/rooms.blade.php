@if ($rooms->count() > 0)
<section class="rooms gray">
  <div class="container">
    <div class="section-title">
      <h4>{{ $static_room->section_title_title }}<span class="text-himara">{{ $static_room->section_title_title_span
          }}</span></h4>
      <p class="section-subtitle">{{ $static_room->section_title_subtitle }}</p>
      <a href="{{ $static_room->section_title_a_href }}" class="view-all">{{ $static_room->section_title_a_text }}</a>
    </div>
    <div class="row">
      <!-- ITEM -->
      @foreach ($rooms->where('available', true)->random(3) as $room)
      <div class="col-lg-4">
        <div class="room-grid-item">
          <figure class="gradient-overlay-hover link-icon">
            <a href="/room/{{ $room->id }}">
              <img src="{{ asset('images/rooms/' . strtolower($room->categories->value) . '/' . $room->images[0]->image_img) }}" class="img-fluid"
                alt="Image">
            </a>
            <div class="room-services">
              @foreach ($room->services as $service)
              @if ($service->i_class != '')
              <i class="fa {{ $service->i_class }}" aria-hidden="true" data-toggle="popover" data-placement="right"
                data-trigger="hover" data-content="{{ $service->similar_rooms_room_services_i_data_content }}"
                data-original-title="{{ $service->similar_rooms_room_services_i_data_title }}"></i>
              @endif
              @endforeach
            </div>
            <div class="room-price">€{{ $room->price }} / night</div>
          </figure>
          <div class="room-info">
            <h2 class="room-title">
              <a href="/room/{{ $room->id }}">{{ $room->name }}</a>
            </h2>
            <p>{{ $room->slogan }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif