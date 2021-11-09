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

        <a href="#homeStaticEditBookingForm" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Booking Form
        </a>

        <a href="#homeStaticEditAbout" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          About
        </a>

        <a href="#homeStaticEditRoom" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Room
        </a>

        <a href="#homeStaticEditServices" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Services
        </a>

        <a href="#homeStaticEditGallery" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Gallery
        </a>

        <a href="#homeStaticEditTestimonial" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Testimonial
        </a>

        <a href="#homeStaticEditRestaurant" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Restaurant
        </a>

        <a href="#homeStaticEditNew" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          New
        </a>

        <a href="#homeStaticEditVideo" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Video
        </a>

        <a href="#homeStaticEditContact" class="font-display tracking-wider text-himaraGold-500 hover:text-himaraGold-600">
          Contact
        </a>

      </div>

      <div></div>

    </div>

  </x-slot>

  <div id="homeStaticEditTop" class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

      <section id="homeStaticEditBookingForm">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Booking Form
        </h3>

        <x-form.form action='/dashboard/home/edit-static-booking-form' method='PUT' title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="name_text" title="" placeholder="" :text="$static_bookingForm->name_text" />
          <x-form.text name="name_a_title" title="" placeholder="" :text="$static_bookingForm->name_a_title" />
          <x-form.text name="name_a_data_content" title="" placeholder="" :text="$static_bookingForm->name_a_data_content" />
          <x-form.fa-select name="name_i_class" title="" :icons="$icons" :selected="$static_bookingForm->name_i_class" />
          <x-form.text name="name_input_placeholder" title="" placeholder="" :text="$static_bookingForm->name_input_placeholder" />
          <x-form.text name="email_text" title="" placeholder="" :text="$static_bookingForm->email_text" />
          <x-form.text name="email_a_title" title="" placeholder="" :text="$static_bookingForm->email_a_title" />
          <x-form.text name="email_a_data_content" title="" placeholder="" :text="$static_bookingForm->email_a_data_content" />
          <x-form.fa-select name="email_i_class" title="" :icons="$icons" :selected="$static_bookingForm->email_i_class" />
          <x-form.text name="email_input_placeholder" title="" placeholder="" :text="$static_bookingForm->email_input_placeholder" />
          <x-form.text name="roomtype_text" title="" placeholder="" :text="$static_bookingForm->roomtype_text" />
          <x-form.text name="roomtype_a_title" title="" placeholder="" :text="$static_bookingForm->roomtype_a_title" />
          <x-form.text name="roomtype_a_data_content" title="" placeholder="" :text="$static_bookingForm->roomtype_a_data_content" />
          <x-form.fa-select name="roomtype_i_class" title="" :icons="$icons" :selected="$static_bookingForm->roomtype_i_class" />
          <x-form.text name="roomtype_select_title" title="" placeholder="" :text="$static_bookingForm->roomtype_select_title" />
          <x-form.text name="date_text" title="" placeholder="" :text="$static_bookingForm->date_text" />
          <x-form.text name="date_a_title" title="" placeholder="" :text="$static_bookingForm->date_a_title" />
          <x-form.text name="date_a_data_content" title="" placeholder="" :text="$static_bookingForm->date_a_data_content" />
          <x-form.fa-select name="date_i_class" title="" :icons="$icons" :selected="$static_bookingForm->date_i_class" />
          <x-form.text name="date_input_placeholder" title="" placeholder="" :text="$static_bookingForm->date_input_placeholder" />
          <x-form.text name="guest_text" title="" placeholder="" :text="$static_bookingForm->guest_text" />
          <x-form.text name="guest_a_title" title="" placeholder="" :text="$static_bookingForm->guest_a_title" />
          <x-form.text name="guest_a_data_content" title="" placeholder="" :text="$static_bookingForm->guest_a_data_content" />
          <x-form.fa-select name="guest_i_class" title="" :icons="$icons" :selected="$static_bookingForm->guest_i_class" />
          <x-form.text name="guest_guestpicker" title="" placeholder="" :text="$static_bookingForm->guest_guestpicker" />
          <x-form.text name="guest_adult_text" title="" placeholder="" :text="$static_bookingForm->guest_adult_text" />
          <x-form.text name="guest_adult_a_data_content" title="" placeholder="" :text="$static_bookingForm->guest_adult_a_data_content" />
          <x-form.fa-select name="guest_adult_a_i_class" title="" :icons="$icons" :selected="$static_bookingForm->guest_adult_a_i_class" />
          <x-form.text name="guest_children_text" title="" placeholder="" :text="$static_bookingForm->guest_children_text" />
          <x-form.text name="guest_children_a_data_content" title="" placeholder="" :text="$static_bookingForm->guest_children_a_data_content" />
          <x-form.fa-select name="guest_children_a_i_class" title="" :icons="$icons" :selected="$static_bookingForm->guest_children_a_i_class" />
          <x-form.text name="guest_submit_text" title="" placeholder="" :text="$static_bookingForm->guest_submit_text" />
          <x-form.text name="guest_submit_a_href" title="" placeholder="" :text="$static_bookingForm->guest_submit_a_href" />
          <x-form.text name="guest_submit_a_text" title="" placeholder="" :text="$static_bookingForm->guest_submit_a_text" />
        </x-form.form>

      </section>

      <section id="homeStaticEditAbout">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          About
        </h3>

        <x-form.form action='/dashboard/home/edit-static-about' method='PUT' enctype title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_title" title="" placeholder="Title before yellow" :text="$static_about->section_title_title" />
          <x-form.text name="section_title_title_span" title="" placeholder="Title in yellow" :text="$static_about->section_title_title_span" />
          <x-form.text name="section_title_title_after" title="" placeholder="Title after yellow" :text="$static_about->section_title_title_after" />
          <x-form.text name="section_title_section_subtitle" title="" placeholder="" :text="$static_about->section_title_section_subtitle" />
          <x-form.text name="info_branding_p" title="" placeholder="" :text="$static_about->info_branding_p" />
          <x-form.text name="providers_text" title="" placeholder="" :text="$static_about->providers_text" />
          <x-form.upload name="content_img" title="" />
          <x-form.fa-select name="content_star_i_class" title="" :icons="$icons" :selected="$static_about->content_star_i_class" />
          <x-form.text name="content_title" title="" placeholder="" :text="$static_about->content_title" />
          <x-form.text name="content_text" title="" placeholder="" :text="$static_about->content_text" />
        </x-form.form>

      </section>

      <section id="homeStaticEditRoom">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Room
        </h3>

        <x-form.form action='/dashboard/home/edit-static-room' method='PUT'  title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_title" title="" placeholder="Title before yellow" :text="$static_room->section_title_title" />
          <x-form.text name="section_title_title_span" title="" placeholder="Title in yellow" :text="$static_room->section_title_title_span" />
          <x-form.text name="section_title_title_after" title="" placeholder="Title after yellow" :text="$static_room->section_title_title_after" />
          <x-form.text name="section_title_subtitle" title="" placeholder="" :text="$static_room->section_title_subtitle" />
          <x-form.text name="section_title_a_href" title="" placeholder="" :text="$static_room->section_title_a_href" />
          <x-form.text name="section_title_a_text" title="" placeholder="" :text="$static_room->section_title_a_text" />
        </x-form.form>

      </section>

      <section id="homeStaticEditServices">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Services
        </h3>

        <x-form.form action='/dashboard/home/edit-static-service' method='PUT'  title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_h4" title="" placeholder="Title before yellow" :text="$static_service->section_title_h4" />
          <x-form.text name="section_title_span" title="" placeholder="Title in yellow" :text="$static_service->section_title_span" />
          <x-form.text name="section_title_h4_after" title="" placeholder="Title after yellow" :text="$static_service->section_title_h4_after" />
          <x-form.text name="section_title_text" title="" placeholder="" :text="$static_service->section_title_text" />
        </x-form.form>

      </section>

      <section id="homeStaticEditGallery">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Gallery
        </h3>

        <x-form.form action='/dashboard/home/edit-static-gallery' method='PUT'  title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_h4" title="" placeholder="Title before yellow" :text="$static_gallery->section_title_h4" />
          <x-form.text name="section_title_span" title="" placeholder="Title in yellow" :text="$static_gallery->section_title_span" />
          <x-form.text name="section_title_h4_after" title="" placeholder="Title after yellow" :text="$static_gallery->section_title_h4_after" />
          <x-form.text name="section_title_subtitle" title="" placeholder="" :text="$static_gallery->section_title_subtitle" />
          <x-form.text name="section_title_a_href" title="" placeholder="" :text="$static_gallery->section_title_a_href" />
          <x-form.text name="section_title_a_text" title="" placeholder="" :text="$static_gallery->section_title_a_text" />
        </x-form.form>

      </section>

      <section id="homeStaticEditTestimonial">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Testimonial
        </h3>

        <x-form.form action='/dashboard/home/edit-static-testimonial' method='PUT'  title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_h4" title="" placeholder="Title before yellow" :text="$static_testimonial->section_title_h4" />
          <x-form.text name="section_title_span" title="" placeholder="Title in yellow" :text="$static_testimonial->section_title_span" />
          <x-form.text name="section_title_h4_after" title="" placeholder="Title after yellow" :text="$static_testimonial->section_title_h4_after" />
          <x-form.text name="section_title_p" title="" placeholder="" :text="$static_testimonial->section_title_p" />
        </x-form.form>

      </section>

      <section id="homeStaticEditRestaurant">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Restaurant
        </h3>

        <x-form.form action='/dashboard/home/edit-static-restaurant' method='PUT' enctype title='Edition static contact' subtitle="All text in your page">
          <x-form.upload name="section_title_data_src_img" title="" />
          <x-form.text name="section_title_h4" title="" placeholder="" :text="$static_restaurant->section_title_h4" />
          <x-form.text name="section_title_p" title="" placeholder="" :text="$static_restaurant->section_title_p" />
        </x-form.form>

      </section>

      <section id="homeStaticEditNew">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          New
        </h3>

        <x-form.form action='/dashboard/home/edit-static-new' method='PUT'  title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title_h4" title="" placeholder="Title before yellow" :text="$static_new->section_title_h4" />
          <x-form.text name="section_title_span" title="" placeholder="Title in yellow" :text="$static_new->section_title_span" />
          <x-form.text name="section_title_h4_after" title="" placeholder="Title after yellow" :text="$static_new->section_title_h4_after" />
          <x-form.text name="section_title_p" title="" placeholder="" :text="$static_new->section_title_p" />
        </x-form.form>

      </section>

      <section id="homeStaticEditVideo">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Video
        </h3>

        <x-form.form action='/dashboard/home/edit-static-video' method='PUT' enctype title='Edition static contact' subtitle="All text in your page">
          <x-form.upload name="video_src_img" title="" />
          <x-form.text name="video_href" title="" placeholder="" :text="$static_video->video_href" />
          <x-form.fa-select name="video_i_class" title="" :icons="$icons" :selected="$static_video->video_i_class" />
        </x-form.form>

      </section>

      <section id="homeStaticEditContact">

        <h3 class="font-semibold font-display text-5xl text-himaraGold-500 leading-tight mb-6">
          Contact
        </h3>

        <x-form.form action='/dashboard/home/edit-static-contact' method='PUT' title='Edition static contact' subtitle="All text in your page">
          <x-form.text name="section_title1_h4" title="" placeholder="" :text="$static_contact->section_title1_h4" />
          <x-form.text name="section_title1_p" title="" placeholder="" :text="$static_contact->section_title1_p" />
          <x-form.fa-select name="contact_details_li1_i_class" title="" :icons="$icons" :selected="$static_contact->contact_details_li1_i_class" />
          <x-form.text name="contact_details_li1_text" title="" placeholder="" :text="$static_contact->contact_details_li1_text" />
          <x-form.fa-select name="contact_details_li2_i_class" title="" :icons="$icons" :selected="$static_contact->contact_details_li2_i_class" />
          <x-form.text name="contact_details_li2_text" title="" placeholder="" :text="$static_contact->contact_details_li2_text" />
          <x-form.fa-select name="contact_details_li3_i_class" title="" :icons="$icons" :selected="$static_contact->contact_details_li3_i_class" />
          <x-form.text name="contact_details_li3_text" title="" placeholder="" :text="$static_contact->contact_details_li3_text" />
          <x-form.fa-select name="contact_details_li4_i_class" title="" :icons="$icons" :selected="$static_contact->contact_details_li4_i_class" />
          <x-form.text name="contact_details_li4_text" title="" placeholder="" :text="$static_contact->contact_details_li4_text" />
          <x-form.fa-select name="contact_details_li5_i_class" title="" :icons="$icons" :selected="$static_contact->contact_details_li5_i_class" />
          <x-form.text name="contact_details_li5_text" title="" placeholder="" :text="$static_contact->contact_details_li5_text" />
          <x-form.text name="contact_details_li5_a_href" title="" placeholder="" :text="$static_contact->contact_details_li5_a_href" />
          <x-form.text name="contact_details_li5_a_text" title="" placeholder="" :text="$static_contact->contact_details_li5_a_text" />
          <x-form.text name="section_title2_h4" title="" placeholder="" :text="$static_contact->section_title2_h4" />
          <x-form.text name="section_title2_p" title="" placeholder="" :text="$static_contact->section_title2_p" />
          <x-form.text name="form_input1_placeholder" title="" placeholder="" :text="$static_contact->form_input1_placeholder" />
          <x-form.text name="form_input2_placeholder" title="" placeholder="" :text="$static_contact->form_input2_placeholder" />
          <x-form.text name="form_input3_placeholder" title="" placeholder="" :text="$static_contact->form_input3_placeholder" />
          <x-form.fa-select name="form_submit_i_class" title="" :icons="$icons" :selected="$static_contact->form_submit_i_class" />
          <x-form.text name="form_submit_text" title="" placeholder="" :text="$static_contact->form_submit_text" />
        </x-form.form>

      </section>

    </div>
  </div>
</x-app-layout>
