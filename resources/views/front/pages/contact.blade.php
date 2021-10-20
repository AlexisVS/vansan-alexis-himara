@extends('front.layout.main')
@section('content')
  {{-- TOP MENU --}}
  @include('front.partials.layout.top-menu')

  {{-- Header --}}
  @include('front.partials.layout.header')

  {{-- PAGE TITLE --}}
  @include('front.partials.pages.contact.page-title')
  <main class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="section-title">
            <h4>{{ $static_contact->section_title_title }}</h4>
            <p class="section-subtitle">{{ $static_contact->section_title_subtitle }}</p>
          </div>
          <p>{{ $static_contact->section_title_text }}</p>
          @include('front.partials.pages.contact.contact-form')
        </div>
        <div class="col-md-4">
          @include('front.partials.pages.contact.sidebar')
        </div>
      </div>
    </div>
  </main>
  @include('front.partials.layout.footer')
@endsection

@section('after_wrapper')
  @include('front.partials.layout.contact-notification')
@endsection
