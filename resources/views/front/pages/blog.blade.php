@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.blog.page-title')
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-12">
          @include('front.partials.pages.blog.posts')
        </div>
        <div class="col-lg-3 col-12">
          @include('front.partials.pages.blog.sidebar')
        </div>
      </div>
  </main>
@endsection
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection
