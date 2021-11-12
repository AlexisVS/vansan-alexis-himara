<form id="contact-form" action="/contact" method="POST" class="contact-form">
  @csrf
  @method('POST')
  <div class="form-group">
    <input class="form-control" name="name" placeholder="{{ $static_contact->form_name }}" type="text">
  </div>
  <div class="form-group">
    <input class="form-control" name="email" placeholder="{{ $static_contact->form_email }}" type="email">
  </div>
  <div class="form-group">
    <input class="form-control" name="phone" placeholder="{{ $static_contact->form_phone }}" type="text">
  </div>
  <div class="form-group">
    <input class="form-control" name="subject" placeholder="{{ $static_contact->form_subject }}" type="text">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="message" placeholder="{{ $static_contact->form_message }}"></textarea>
  </div>
  <div class="form-group">
    <button class="btn mt30" type="submit">{{ $static_contact->form_submit }}</button>
  </div>
</form>
