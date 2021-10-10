@extends('front.layout.main')
@section('content')
  {{-- TOP MENU --}}
  @include('front.partials.layout.top-menu')

  {{-- Header --}}
  @include('front.partials.layout.header')

  {{-- PAGE TITLE --}}
  @include('front.partials.pages.contact.page-title')
@endsection

@section('after_wrapper')
  @include('front.partials.layout.contact-notification')
@endsection
