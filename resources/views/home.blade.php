@extends('front.layout.main')

@section('content')

  @include('front.partials.layout.top-menu')
  @include('front.partials.layout.header')
  <div class="slider">
    @include('front.partials.pages.home.revolution-slider')
    @include('front.partials.pages.home.booking-form')
  </div>
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
