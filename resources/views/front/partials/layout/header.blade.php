<header class="horizontal-header sticky-header" data-menutoggle="991">
  <div class="container">
    <!-- BRAND -->
    <div class="brand">
      <div class="logo">
        <a href="/">
          <img src="{{ asset('images/logo.svg') }}" alt="Hotel Himara">
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
          <a href="/">HOME</a>
        </li>
        <li class="menu-item dropdown">
          <a href="/room">ROOMS</a>
        </li>
        <li class="menu-item dropdown">
          <a href="/team">TEAM</a>
        </li>
        <li class="menu-item dropdown">
          <a href="/gallery">GALLERY</a>
        </li>
        <li class="menu-item">
          <a href="/contact">CONTACT US</a>
        </li>
        <li class="menu-item menu-btn">
          @if (Auth::user() !== null)
            <a href="/booking-form" class="btn">
              <i class="fa fa-user"></i>
              Reservation</a>
          @else
            <a href="/login" class="btn">
              <i class="fa fa-user"></i>
              LOG IN</a>
          @endif
        </li>
      </ul>
    </nav>
  </div>
</header>
