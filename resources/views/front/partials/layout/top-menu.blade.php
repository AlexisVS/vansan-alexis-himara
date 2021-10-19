<div class="topbar">
  <div class="container">
    <div class="welcome-mssg">
      {{ $topMenu->welcome_mssg }}
    </div>
    <div class="top-right-menu">
      <ul class="top-menu">
        <li class="d-none d-md-inline">
          <a href="{{ $topMenu->a_tel_href }}">
            <i class="fa {{ $topMenu->a_tel_i_class }}"></i>{{ $topMenu->a_tel_text }}
          </a>
        </li>
        <li class="d-none d-md-inline">
          <a href="{{ $topMenu->a_mail_href }}">
            <i class="fa {{ $topMenu->a_mail_i_class }}"></i>{{ $topMenu->a_mail_text }}</a>
        </li>
        <li class="language-menu">
          <a href="#" class="active-language"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_active) }}"
              alt="Image">{{ $topMenu->flag_active_text }}</a>
          <ul class="languages">
            <li class="language">
              <a href="#"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_it ) }}" alt="Image">{{ $topMenu->flag_it_text }}</a>
            </li>
            <li class="language">
              <a href="#"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_gr ) }}" alt="Image">{{ $topMenu->flag_gr_text }}</a>
            </li>
            <li class="language">
              <a href="#"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_al ) }}" alt="Image">{{ $topMenu->flag_al_text }}</a>
            </li>
            <li class="language">
              <a href="#"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_fr ) }}" alt="Image">{{ $topMenu->flag_fr_text }}</a>
            </li>
            <li class="language">
              <a href="#"><img src="{{ asset('images/icons/flags/' . $topMenu->flag_es ) }}" alt="Image">{{ $topMenu->flag_es_text }}</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
