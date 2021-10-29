<div class="sidebar">
  <!-- WIDGET -->
  <aside class="widget noborder">
    <div class="vertical-booking-form">
      <div id="booking-notification" class="notification"></div>
      <h3 class="form-title">{{ $static_room_sidebar->sidebar_title }}</h3>
      <div class="inner">


        <form id="booking-form" action="/room/send-form?categoryId={{ $show->room_category_id }}&roomId={{ $show->id }}" method="POST">
          @csrf
          @method('POST')
          <!-- EMAIL -->
          <div class="form-group">
            <input class="form-control" name="booking-email" value="{{ auth()->user()->email ?? null }}" {{
              auth()->user()
            ? 'disabled' : null }} type="email" placeholder="{{ $static_room_sidebar->sidebar_form_email_placeholder
            }}">
          </div>
          <!-- ROOM TYPE -->
          <div class="form-group">
            <select class="form-control" name="booking-roomtype" value="{{ $show->categories->value }}"
              title="{{ $static_room_sidebar->sidebar_form_roomtype_title }}"
              data-header="{{ $static_room_sidebar->sidebar_form_roomtype_data_header }}" disabled="disabled">
              <option value="{{ $show->categories->value }}">{{ $show->categories->text }}</option>

            </select>
          </div>
          <!-- DATE -->
          <div class="form-group">
            <div class="form_date">
              <input type="text" class="datepicker form-control" name="booking-checkin"
                placeholder="{{ $static_room_sidebar->sidebar_form_date_placeholder }}" readonly="readonly">
            </div>
          </div>
          <!-- GUESTS -->
          <div class="form-group">
            <div class="panel-dropdown">
              <div class="form-control guestspicker">{{ $static_room_sidebar->sidebar_form_guestspicker }}
                <span class="gueststotal"></span>
              </div>
              <div class="panel-dropdown-content">
                <div class="guests-buttons">
                  <label>{{ $static_room_sidebar->sidebar_form_label1 }}
                    <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                      data-content="{{ $static_room_sidebar->sidebar_form_label1_data_content }}"
                      data-original-title="{{ $static_room_sidebar->sidebar_form_label1_data_title }}">
                      <i class="fa {{ $static_room_sidebar->sidebar_form_label1_i_class }}"></i>
                    </a>
                  </label>
                  <div class="guests-button">
                    <div class="minus"></div>
                    <input type="text" name="booking-adults" class="booking-guests" value="0">
                    <div class="plus"></div>
                  </div>
                </div>
                <div class="guests-buttons">
                  <label>{{ $static_room_sidebar->sidebar_form_label2 }}
                    <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                      data-content="{{ $static_room_sidebar->sidebar_form_label2_data_content }}"
                      data-original-title="{{ $static_room_sidebar->sidebar_form_label2_data_title }}">
                      <i class="fa {{ $static_room_sidebar->sidebar_form_label2_i_class }}"></i>
                    </a>
                  </label>
                  <div class="guests-button">
                    <div class="minus"></div>
                    <input type="text" name="booking-children" class="booking-guests" value="0">
                    <div class="plus"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
            {{-- ! C'est claqué au sol mais ça à la qualité de parvenir a ses fin --}}
            let divPlus, divMinus;
            divPlus = [...document.querySelectorAll('.plus')];
            divPlus.map( function (e) {e.addEventListener('click', function (event) {

              let divPlus, guestTotal;
              var numberPersons = {!!  json_encode($show->number_persons, JSON_HEX_TAG) !!};

              divPlus = [...document.querySelectorAll('.plus')];

              guestTotal = document.querySelector('.gueststotal');
              guestTotal = guestTotal.innerText;

              if (guestTotal < numberPersons) {
                divPlus.forEach( e => e.style.visibility = 'visible');
              }
              if (guestTotal == numberPersons - 1) {
                divPlus.forEach( e => e.style.visibility = 'hidden');
              }
            })});

            divMinus = [...document.querySelectorAll('.minus')];
            divMinus.map( function (e) {e.addEventListener('click', function (event) {

              let divPlus, divMinus, guestTotal;
              var numberPersons = {!!  json_encode($show->number_persons, JSON_HEX_TAG) !!};

              divPlus = [...document.querySelectorAll('.plus')];
              divMinus = [...document.querySelectorAll('.minus')]

              guestTotal = document.querySelector('.gueststotal');
              guestTotal = guestTotal.innerText;

              if (guestTotal == 1) {
                divPlus.forEach( e => e.style.visibility = 'visible');
                divMinus.forEach( e => e.style.visibility = 'visible');
              }
            })});
          </script>

          <!-- BOOKING BUTTON -->
          <button type="submit" class="btn btn-dark btn-fw mt20 mb20">
            {{ $static_room_sidebar->sidebar_form_submit}}
          </button>
        </form>
      </div>
    </div>
  </aside>
</div>