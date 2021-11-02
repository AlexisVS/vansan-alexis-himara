<div class="page-title gradient-overlay op6" style="background: url('{{ asset('images/' . $static_bookingForm->page_title_bg_img ) }}'); background-repeat: no-repeat;
background-size: cover;">
  <div class="container">
    <div class="inner">
      <h1>{{ $static_bookingForm->page_title_title }}</h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ $static_bookingForm->page_title_a_href }}">{{ $static_bookingForm->page_title_a_text }}</a>
        </li>
        <li>{{ $static_bookingForm->page_title_text }}</li>
      </ol>
    </div>
  </div>
</div>