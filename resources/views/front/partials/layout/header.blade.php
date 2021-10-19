<header class="horizontal-header sticky-header" data-menutoggle="991">
  <div class="container">
    <!-- BRAND -->
    <div class="brand">
      <div class="logo">
        <a href="{{ $header->brand_href }}">
          <img src="{{ asset('images/' . $header->brand_img ) }}" alt="Hotel Himara">
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
        <li class="menu-item dropdown active">
          <a href="{{ $header->menu_li1_href }}">{{ $header->menu_li1_text }}</a>
        </li>
        <li class="menu-item dropdown">
          <a href="{{ $header->menu_li2_href }}">{{ $header->menu_li2_text }}</a>
        </li>
        <li class="menu-item dropdown">
          <a href="{{ $header->menu_li3_href }}">{{ $header->menu_li3_text }}</a>
        </li>
        <li class="menu-item dropdown">
          <a href="{{ $header->menu_li4_href }}">{{ $header->menu_li4_text }}</a>
        </li>
        <li class="menu-item">
          <a href="{{ $header->menu_li5_href }}">{{ $header->menu_li5_text }}</a>
        </li>
        <li class="menu-item menu-btn">
          @if (Auth::user() !== null)
            <a href="{{ $header->menu_li6a_href }}" class="btn">
              <i class="fa {{ $header->menu_li6a_class }}"></i>
              {{ $header->menu_li6a_text }}</a>
          @else
            <a href="{{ $header->menu_li6b_href }}" class="btn">
              <i class="fa {{ $header->menu_li6b_class }}"></i>
              {{ $header->menu_li6b_text }}</a>
          @endif
        </li>
      </ul>
    </nav>
  </div>
</header>
