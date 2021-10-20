@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.page.page-title')
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          <p>{{ $static_page->text1 }}</p>
          <p>{{ $static_page->text2 }}</p>
          <p>{{ $static_page->text3 }}</p>
        </div>
        <div class="col-lg-3 col-12">
          @include('front.partials.pages.page.sidebar')
        </div>
      </div>
  </main>
  @include('front.partials.layout.footer')
@endsection
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection
