@extends('front.layout.main')

@section('before-wrapper')
  @include('front.partials.pages.home.preloader')
@endsection

@section('content')
  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  @include('front.partials.pages.home.revolution-slider')
  @include('front.partials.pages.home.about')
  @include('front.partials.pages.home.rooms')
  @include('front.partials.pages.home.services')
  @include('front.partials.pages.home.gallery')
  @include('front.partials.pages.home.testimonials')
  @include('front.partials.pages.home.restaurant')
  @include('front.partials.pages.home.news')
  @include('front.partials.pages.home.video')
  @include('front.partials.pages.home.contact-v2')
  @include('front.partials.layout.footer')

@endsection

@section('after-wrapper')
  @include('front.partials.layout.contact-notification')
@endsection
