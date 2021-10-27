<div class="page-title gradient-overlay op5" style="background: url('{{ asset('images/' . $static_room->page_title_bg) }}'); background-repeat: no-repeat;
background-size: cover;">
  <div class="container">
    <div class="inner">
      <h1>{{ strtoupper($show->name) }}</h1>
      <div class="room-details-price">
        €{{ $show->price }} {{ $static_room->page_title_room_details_price }}
      </div>
      <ol class="breadcrumb">
        <li>
          <a href="{{ $static_room->page_titleli1_href }}">{{ $static_room->page_titleli1_text }}</a>
        </li>
        <li>
          <a href="{{ $static_room->page_titleli2_href }}">{{ $static_room->page_titleli2_text }}</a>
        </li>
        <li>{{ $show->name }}</li>
      </ol>
    </div>
  </div>
</div>