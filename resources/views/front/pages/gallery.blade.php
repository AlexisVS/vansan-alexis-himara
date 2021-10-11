@extends('front.layout.main')
@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.gallery.page-title')
  {{-- Gallery --}}
  @include('front.partials.pages.gallery.gallery')

  @include('front.partials.layout.footer')
@endsection
@section('after-wrapper')
  @include('front.partials.layout.notification')
@endsection
