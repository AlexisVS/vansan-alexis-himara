<x-app-layout>
  <x-slot name="header">
    <div class="w-full flex items-center justify-between">


      <div class="flex items-center space-x-12">

        <a href="{{ url()->previous() }}" class="px-6 py-1 bg-himaraGold-500 hover:bg-himaraGold-400 shadow">
          <svg version="1.1" id="Layer_1" class="fill-current text-white w-7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 550 492;" xml:space="preserve">
            <g>
              <g>
                <path d="M487.912,115.343H269.116V38.831c0-1.48-0.952-2.82-2.276-3.456c-1.324-0.64-2.952-0.464-4.116,0.448L1.464,242.991C0.548,243.719,0,244.827,0,245.999c0,1.176,0.528,2.284,1.444,3.012l261.224,207.164c0.7,0.548,1.54,0.832,2.392,0.832c0.568,0,1.248-0.124,1.78-0.38c1.324-0.64,2.276-1.988,2.276-3.464v-76.508h218.908c2.116,0,3.976-1.536,3.976-3.664v-253.46C492,117.407,490.032,115.343,487.912,115.343z" />
              </g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
            <g>
            </g>
          </svg>
        </a>
        <h2 class="font-semibold font-display text-xl text-himaraGold-500 leading-tight">
          Static Home
        </h2>
      </div>
      <div class="hidden lg:flex items-center space-x-4">

        <a href="#homeStaticIndexBookingForm" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Booking Form
        </a>

        <a href="#homeStaticIndexAbout" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          About
        </a>

        <a href="#homeStaticIndexRoom" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Room
        </a>

        <a href="#homeStaticIndexServices" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Services
        </a>

        <a href="#homeStaticIndexGallery" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Gallery
        </a>

        <a href="#homeStaticIndexTestimonial" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Testimonial
        </a>

        <a href="#homeStaticIndexRestaurant" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Restaurant
        </a>

        <a href="#homeStaticIndexNew" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          New
        </a>

        <a href="#homeStaticIndexVideo" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Video
        </a>

        <a href="#homeStaticIndexContact" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Contact
        </a>

      </div>
      <div></div>
    </div>
  </x-slot>

  <div id="homeStaticIndexTop" class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <section id="homeStaticIndexBookingForm">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Booking Form
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_bookingForm)->keys()" title='Static Home Booking Form' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_bookingForm])" edit-uri="/dashboard/home/edit-static/#homeStaticEditBookingForm" uri-static='true' />

      </section>

      <section id="homeStaticIndexAbout">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          About
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_about)->keys()" title='Static Home About' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_about])" edit-uri="/dashboard/home/edit-static/#homeStaticEditAbout" uri-static='true' />

      </section>

      <section id="homeStaticIndexRoom">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Room
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_room)->keys()" title='Static Home Room' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_room])" edit-uri="/dashboard/home/edit-static/#homeStaticEditRoom" uri-static='true' />

      </section>

      <section id="homeStaticIndexServices">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Services
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_service)->keys()" title='Static Home Services' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_service])" edit-uri="/dashboard/home/edit-static/#homeStaticEditServices" uri-static='true' />

      </section>

      <section id="homeStaticIndexGallery">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Gallery
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_gallery)->keys()" title='Static Home Gallery' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_gallery])" edit-uri="/dashboard/home/edit-static/#homeStaticEditGallery" uri-static='true' />

      </section>

      <section id="homeStaticIndexTestimonial">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Testimonial
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_testimonial)->keys()" title='Static Home Testimonial' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_testimonial])" edit-uri="/dashboard/home/edit-static/#homeStaticEditTestimonial" uri-static='true' />

      </section>

      <section id="homeStaticIndexRestaurant">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Restaurant
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_restaurant)->keys()" title='Static Home Restaurant' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_restaurant])" edit-uri="/dashboard/home/edit-static/#homeStaticEditRestaurant" uri-static='true' />

      </section>

      <section id="homeStaticIndexNew">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          New
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_new)->keys()" title='Static Home New' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_new])" edit-uri="/dashboard/home/edit-static/#homeStaticEditNew" uri-static='true' />

      </section>

      <section id="homeStaticIndexVideo">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Video
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_video)->keys()" title='Static Home Video' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_video])" edit-uri="/dashboard/home/edit-static/#homeStaticEditVideo" uri-static='true' />

      </section>

      <section id="homeStaticIndexContact">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight">
          Contact
        </h3>

        <x-description.description image-path="/images/" :columns="collect($static_bookingForm)->keys()" title='Static Home Contact' {{-- subtitle='Le sous titre mon composant description'  --}} :data-tables="collect([$static_bookingForm])" edit-uri="/dashboard/home/edit-static/#homeStaticEditContact" uri-static='true' />

      </section>

    </div>
  </div>
</x-app-layout>
