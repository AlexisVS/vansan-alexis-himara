<header class="horizontal-header sticky-header" data-menutoggle="991">
  <div class="container">
    <!-- BRAND -->
    <div class="brand">
      <div class="logo">
        <a href="{{ $header->brand_href }}">
          <img src="{{ asset('images/' . $image_brand->image_brand_img ) }}" alt="Hotel Himara">
        </a>
      </div>
    </div>
    <!-- MOBILE MENU BUTTON -->
    <div id="toggle-menu-button" class="toggle-menu-button">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
    <!-- MAIN MENU -->
    <nav id="main-menu" class="main-menu">
      <ul class="menu">
        <li class="menu-item dropdown {{ request()->route('/') == '/' ? 'active' : null }} ">
          <a href="{{ $header->menu_li1_href }}">{{ $header->menu_li1_text }}</a>
        </li>
        <li class="menu-item dropdown {{ request()->route('/room') == 'room' ? 'active' : null }}">
          <a href="{{ $header->menu_li2_href }}">{{ $header->menu_li2_text }}</a>
        </li>
        <li class="menu-item dropdown {{ request()->route()->uri == 'team' ? 'active' : null }}">
          <a href="{{ $header->menu_li3_href }}">{{ $header->menu_li3_text }}</a>
        </li>
        <li class="menu-item dropdown {{ request()->route()->uri == 'gallery' ? 'active' : null }}">
          <a href="{{ $header->menu_li4_href }}">{{ $header->menu_li4_text }}</a>
        </li>
        <li class="menu-item {{ request()->route()->uri == 'contact' ? 'active' : null }}">
          <a href="{{ $header->menu_li5_href }}">{{ $header->menu_li5_text }}</a>
        </li>
        <li class="menu-item menu-btn">
          @if (Auth::user() !== null)
          <a href="{{ $header->menu_li6a_href }}" class="btn">
            <i class="fa {{ $header->menu_li6a_i_class }}"></i>
            {{ $header->menu_li6a_text }}</a>
          @else
          <a href="{{ $header->menu_li6b_href }}" class="btn">
            <i class="fa {{ $header->menu_li6b_i_class }}"></i>
            {{ $header->menu_li6b_text }}</a>
          @endif
        </li>
        @if (Auth::user() !== null)
        <li class="menu-item menu-btn">
            <a href="/profile" class="ml-2 d-flex justify-content-center align-items-center">
              <i class="pb-1 mr-2 fa fa-2x {{ $header->menu_li6a_i_class }}"></i>
              Profile
            </a>
        </li>

        @endif
      </ul>
    </nav>
  </div>
</header>
