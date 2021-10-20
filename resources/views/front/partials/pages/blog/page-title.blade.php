<div class="page-title gradient-overlay op6" style="background: url('{{ asset('images/' . $static_pageTitle->img) }}'); background-repeat: no-repeat;
  background-size: cover;">
  <div class="container">
    <div class="inner">
      <h1>{{ $static_pageTitle->title }}</h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ $static_pageTitle->a_href }}">{{ $static_pageTitle->a_text }}</a>
        </li>
        <li>{{ $static_pageTitle->li }}</li>
      </ol>
    </div>
  </div>
</div>
