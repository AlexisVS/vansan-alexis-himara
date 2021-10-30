@extends("front.layout.main")
@section('content')

{{-- TOP MENU --}}
@include('front.partials.layout.top-menu')

{{-- Header --}}
@include('front.partials.layout.header')

{{-- PAGE TITLE --}}
@include('front.partials.pages.booking-form.page-title')
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-12">
        @if (Auth()->check())
        {{-- CONTENT --}}
        @include('front.partials.pages.booking-form.content')
        {{-- BOOKING FORM --}}
        @include('front.partials.pages.booking-form.booking-form')
        @else
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h2>{{ $static_bookingForm->section_title_not_connected }}</h2>
          <div class="d-flex align-items-center mt-3">

            <a class="btn mx-auto" href="{{ $static_bookingForm->section_title_not_connected_link_href }}">{{
              $static_bookingForm->section_title_not_connected_link_text }}</a>
              <span class="mb-0 mx-3 h2">OR</span>
            <a class="btn mx-auto" href="{{ $static_bookingForm->section_title_not_connected_link2_href }}">{{
              $static_bookingForm->section_title_not_connected_link2_text }}</a>
              </div>
        </div>
        @endif
      </div>

      {{-- SIDEBAR --}}
      @include('front.partials.pages.booking-form.sidebar')

    </div>
  </div>
</main>

{{-- FOOTER --}}
@include('front.partials.layout.footer')

@endsection


@section('after_wrapper')

{{-- BOOKING NOTIFICATION --}}
@include('front.partials.layout.booking-notification')

@endsection