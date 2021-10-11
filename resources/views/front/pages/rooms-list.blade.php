@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.rooms-list.page-title')
  <main class="rooms-list-view">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          @include('front.partials.pages.rooms-list.rooms-list')
        </div>
        <div class="col-lg-3 col-12">
          @include('front.partials.pages.rooms-list.sidebar')
        </div>
      </div>
    </div>
  </main>
  @include('front.partials.layout.footer')
@endsection

@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection
