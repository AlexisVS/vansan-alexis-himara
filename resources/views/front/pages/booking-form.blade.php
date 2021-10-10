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

          {{-- CONTENT --}}
          @include('front.partials.pages.booking-form.content')

          {{-- BOOKING FORM --}}
          @include('front.partials.pages.booking-form.booking-form')
        </div>

        {{-- SIDEBAR --}}
        @include('front.partials.pages.booking-form.sidebar')

      </div>
    </div>
  </main>

  {{-- FOOTER --}}
  @include('front.partials.pages.booking-form.footer')

@endsection


@section('after_wrapper')

  {{-- BOOKING NOTIFICATION --}}
  @include('front.partials.layout.booking-notification')

@endsection
