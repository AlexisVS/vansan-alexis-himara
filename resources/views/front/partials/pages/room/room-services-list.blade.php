<div class="room-services-list">
  <div class="row">
    <div class="col-sm-4">
      <ul class="list-unstyled">
        <li>
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>
          @if ($show->number_bed == 1)
          Single bed
          @endif
          @if ($show->number_bed == 2)
          Double beds
          @endif
          @if ($show->number_bed > 2)
          {{ $show->number_bed }} beds
          @endif
        </li>
        <li>
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>{{ $show->sq_mt }} Sq mt
        </li>
        <li>
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>
          @if ($show->number_persons == 1)
          1 person
          @endif
          @if ($show->number_persons > 1)
          {{ $show->number_persons }} persons
          @endif
        </li>
        @if ($show->services[0]->pivot->available == true)
        <li>
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>{{ $show->services[0]->room_service_text }}
        </li>
        @else
        <li class="no">
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>{{ $show->services[0]->room_service_text }}
        </li>
        @endif
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="list-unstyled">
        {{-- {{ dd($show->services) }} --}}
        @foreach ($services as $service)

        @if ($loop->iteration > 1)
        @if ($loop->iteration <= $numberShowServices && $service->pivot->available == true)
        <li>
          <i class="fa {{ $static_room->service_list_i_class_accepted }}"></i>{{ $service->room_service_text }}
        </li>
        @else
        <li class="no">
          <i class="fa {{ $static_room->service_list_i_class_refused }}"></i>{{ $service->room_service_text }}
        </li>
        @endif
        @if ($loop->iteration % 4 == 1)
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="list-unstyled">
        @endif
        @endif
        @endforeach
      </ul>
    </div>
  </div>
</div>