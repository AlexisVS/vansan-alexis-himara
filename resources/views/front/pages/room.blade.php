@extends('front.layout.main')
@section('content')
@include('front.partials.layout.top-menu')
@include('front.partials.layout.header')
@include('front.partials.pages.room.page-title')
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-12">
        @include('front.partials.pages.room.room-slider')
        @include('front.partials.pages.room.dropcap')
        <p>
          {{ $show->text1 }}
        </p>
        @include('front.partials.pages.room.section-title')
        @include('front.partials.pages.room.room-services-list')
        <p>{{ $show->text2_before }}
          <u>{{ $show->text2_u }}</u>
          {{ $show->text2_after }}
        </p>
        <p>{{ $show->text3_before }}
          <u>{{ $show->text3_u }}</u>
          {{ $show->text3_after }}
        </p>
        <!-- ROOM REVIEWS -->
        @include('front.partials.pages.room.room-reviews')
        @include('front.partials.pages.room.similar-rooms')
      </div>
      <div class="col-lg-3 col-12">
        @include('front.partials.pages.room.sidebar')
      </div>
    </div>
</main>
@include('front.partials.layout.footer')
@endsection
@section('after-wrapper')
@include('front.partials.layout.notification')
@endsection