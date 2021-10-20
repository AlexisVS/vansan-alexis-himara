<section class="contact-v2 gray">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="section-title">
          <h4>{{ $static_contact->section_title1_h4 }}</h4>
          <p class="section-subtitle">{{ $static_contact->section_title1_p }}</p>
        </div>
        <ul class="contact-details">
          <li>
            <i class="fa {{ $static_contact->contact_details_li1_i_class }}" aria-hidden="true"></i>
            {{ $static_contact->contact_details_li1_text }}
          </li>
          <li>
            <i class="fa {{ $static_contact->contact_details_li2_i_class }}" aria-hidden="true"></i>
            {{ $static_contact->contact_details_li2_text }}
          </li>
          <li>
            <i class="fa {{ $static_contact->contact_details_li3_i_class }}"></i>
            {{ $static_contact->contact_details_li3_text }}
          </li>
          <li>
            <i class="fa {{ $static_contact->contact_details_li4_i_class }}"></i>
            {{ $static_contact->contact_details_li4_text }}
          </li>
          <li>
            <i class="fa {{ $static_contact->contact_details_li5_i_class }}"></i>
            {{ $static_contact->contact_details_li5_text }}
            <a
              href="{{ $static_contact->contact_details_li5_a_href }}">{{ $static_contact->contact_details_li5_a_text }}</a>
          </li>
        </ul>
      </div>
      <div class="col-md-7">
        <div class="section-title">
          <h4>{{ $static_contact->section_title2_h4 }}</h4>
          <p class="section-subtitle">{{ $static_contact->section_title2_p }}</p>
        </div>
        <form id="contact-form" name="contact-form">
          <div class="form-group">
            <input class="form-control" name="name" placeholder="{{ $static_contact->form_input1_placeholder }}"
              type="text">
          </div>
          <div class="form-group">
            <input class="form-control" name="email" type="email"
              placeholder="{{ $static_contact->form_input2_placeholder }}">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message"
              placeholder="{{ $static_contact->form_input3_placeholder }}"></textarea>
          </div>
          <button class="btn" type="submit">
            <i
              class="fa {{ $static_contact->form_submit_i_class }}"></i>{{ $static_contact->form_submit_text }}</button>
        </form>
      </div>
    </div>
  </div>
</section>
