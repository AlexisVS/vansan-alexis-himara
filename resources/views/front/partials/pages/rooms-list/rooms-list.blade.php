@foreach ($roomLists->where('available', true) as $room)
<div id="room-item-{{ $room->id }}" class="room-list-item" data-roomId="{{ $room->id }}"
  data-categoryId="{{ $room->category_id }}" {{--
  data-servicesId="{{ $roomServicesRooms->where('room_id', $room->id)->pluck('id')->toJSON() }}" --}}>
  @if ($room->favorite_roomList == true)
  <div class="favorite-item">
    <i class="fa fa-star-o"></i>
  </div>
  @endif
  <div class="row">
    <div class="col-lg-5">
      <figure class="gradient-overlay-hover link-icon">
        <a href="/room/{{ $room->id }}"><img src="{{ asset('images/rooms/single/' . $room->images[0]->image) }}"
            class="img-fluid" alt="Image"></a>
      </figure>
    </div>
    <div class="col-lg-5">
      <div class="room-info">
        <h3 class="room-title">
          <a href="/room/{{ $room->id }}">{{ $room->name }}</a>
        </h3>
        <span class="room-rates">
          @for ($i = 0; $i < $room->rating; $i++)
            <i class="fa {{ $room->rating_i_class }}" aria-hidden="true"></i>
            @endfor
            <a href="/room/{{ $room->id }}#room-reviews">
              {{-- 5.00 Based on 3 Ratings --}}
              @php
              $review = $room->reviews->pluck('rating')->flatten();
              echo number_format($review->sum() / $review->count(), 2) . ' Based on ' . $review->count() . ' ratings';
              @endphp
            </a>
        </span>
        <p>{{ Str::limit($room->text1, 52, ' ..') }}</p>
        <div class="room-services">

          @foreach ($room->services as $service)
          @if ($service->i_class != '' && $service->pivot->available != false)
          <i class="fa {{ $service->i_class }}" data-toggle="popover" data-placement="top" data-trigger="hover"
            data-content="{{ $service->similar_rooms_room_services_i_data_content }}"
            data-original-title="{{ $service->similar_rooms_room_services_i_data_title }}"></i>
          @endif
          @endforeach
          <span>Bed{{ $room->number_bed > 1 ? 's' : '' }}: {{ $room->number_bed }} King{{ $room->number_bed > 1 ? 's' :
            '' }}</span>
          <span>Max Guest{{ $room->number_persons > 1 ? 's' : '' }} : {{ $room->number_persons }}</span>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <div class="room-price">
        <span class="price">€{{ $room->price . '' . $static_roomList->room_list_room_price_price }}</span>
        <a href="/room/{{ $room->id }}" class="btn btn-sm">{{ $static_roomList->room_list_room_price_a_text1 }} <br> {{
          $static_roomList->room_list_room_price_a_text2 }}</a>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- PAGINATION -->
{{ $roomLists->links() }}