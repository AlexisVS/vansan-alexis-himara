<div class="similar-rooms">
  <div class="section-title sm">
    <h4>{{ $static_room->similar_rooms_title }}</h4>
    <p class="section-subtitle">{{ $static_room->similar_rooms_subtitle }}</p>
  </div>
  <div class="row">
    @foreach ($rooms->where('available', true)->where('id', '!=', $show->id)->random(3) as $room)
    <div class="col-lg-4">
      <div class="room-grid-item">
        <figure class="gradient-overlay-hover link-icon">
          <a href="/room/{{ $room->id }}">
            <img src="{{ asset('images/rooms/single/' . $room->images[0]->image) }}" class="img-fluid" alt="Image">
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