@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.events.page-title')
  <main>
    <div class="container">
      @include('front.partials.pages.events.events')
      <div class="load-more">
        LOAD MORE EVENTS
      </div>
  </main>
  @include('front.partials.layout.footer')
@endsection
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection
