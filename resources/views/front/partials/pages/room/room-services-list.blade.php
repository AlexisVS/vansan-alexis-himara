<div class="room-services-list">
  <div class="row">
    <div class="col-sm-4">
      <ul class="list-unstyled">
        <li>
          <i class="fa fa-check"></i>
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
          <i class="fa fa-check"></i>{{ $show->sq_mt }} Sq mt
        </li>
        <li>
          <i class="fa fa-check"></i>
          @if ($show->number_persons == 1)
          1 person
          @endif
          @if ($show->number_persons > 1)
          {{ $show->number_persons }} persons
          @endif
        </li>
        @if ($show->services[0]->pivot->available == true)
        <li>
          <i class="fa fa-check"></i>{{ $show->services[0]->room_service_text }}
        </li>
        @else
        <li class="no">
          <i class="fa fa-check"></i>{{ $show->services[0]->room_service_text }}
        </li>
        @endif
      </ul>
    </div>
    <div class="col-sm-4">
      <ul class="list-unstyled">
        {{-- {{ dd($show->services) }} --}}
        @foreach ($show->services as $service)
        // Je doit prendre l'id de tous ceux qui sont actuellement dans les services de la room,
        // afficher en rouge ou pas si il le faut. ensuite faire un count()
        // pour savoir combien j'en ai actuellement
        // pour pouvoir les rajouter sans prendre les mêmes qu'il y a déja et forcément les mettres en rouge.
        @if ($loop->iteration > 1)
        @if ($service->pivot->available == true)
        <li>
          <i class="fa fa-check"></i>{{ $service->rom_service_text }}
        </li>
        @else
        <li class="no">
          <i class="fa fa-check"></i>{{ $service->rom_service_text }}
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
        {{-- <li>
          <i class="fa fa-check"></i>Breakfast Include
        </li>
        <li>
          <i class="fa fa-check"></i>Private Balcony
        </li>
        <li class="no">
          <i class="fa fa-times"></i>Free Newspaper
        </li> --}}
      </ul>
    </div>
    {{-- <div class="col-sm-4">
      <ul class="list-unstyled">
        <li class="no">
          <i class="fa fa-times"></i>Flat Screen Tv
        </li>
        <li>
          <i class="fa fa-check"></i>Full Ac
        </li>
        <li class="no">
          <i class="fa fa-times"></i>Beach View
        </li>
        <li>
          <i class="fa fa-check"></i>Room Service
        </li>
      </ul>
    </div> --}}
  </div>
</div>