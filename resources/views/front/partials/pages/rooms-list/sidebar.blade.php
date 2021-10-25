<div class="sidebar">
  <aside class="widget noborder">
    <div class="search">
      <form class="widget-search">
        <input type="search" placeholder="{{ $static_roomList->sidebar_search_placeholder }}">
        <button class="btn-search" id="searchsubmit" type="submit">
          <i class="fa {{ $static_roomList->sidebar_search_i_class }}"></i>
        </button>
      </form>
    </div>
  </aside>
  <!-- WIDGET -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_roomList->sidebar_widget1_title }}</h4>
    <ul class="categories">
      @foreach ($roomCategories as $category)
      <li>
        <a href="#">{{ $category->text }}<span class="posts-num">{{ $rooms->where('room_category_id', '=',
            $category->id)->count() }}</span></a>
      </li>
      @endforeach
    </ul>
  </aside>
  <!-- WIDGET -->
  <!-- ! Remplacer par room services -->
  <aside class="widget">
    <h4 class="widget-title">{{ $static_roomList->sidebar_widget2_title }}</h4>
    <div class="tagcloud">
      @foreach ($roomServices as $service )
      <a href="#">
        <span class="tag">{{ $service->room_service_text }}</span>
      </a>
      @endforeach
    </div>
  </aside>
</div>