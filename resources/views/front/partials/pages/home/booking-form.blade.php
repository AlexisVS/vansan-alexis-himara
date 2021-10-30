<div class="horizontal-booking-form">
  <div class="container">
    <div class="inner box-shadow-007">
      <!-- ========== BOOKING NOTIFICATION ========== -->
      <div id="booking-notification" class="notification"></div>
      <form id="booking-form" action="/send-form?formHome=true" method="POST">
        @csrf
        @method('POST')
        <!-- NAME -->
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>{{ $static_bookingForm->name_text }}
                <a href="#" title="{{ $static_bookingForm->name_a_title }}" data-toggle="popover" data-placement="top"
                  data-trigger="hover" data-content="{{ $static_bookingForm->name_a_data_content }}">
                  <i class="fa {{ $static_bookingForm->name_i_class }}"></i>
                </a>
              </label>
              <input class="form-control" name="booking-name" type="text" data-trigger="hover"
                placeholder="{{ $static_bookingForm->name_input_placeholder }}">
            </div>
          </div>
          <!-- EMAIL -->
          <div class="col-md-2">
            <div class="form-group">
              <label>{{ $static_bookingForm->email_text }}
                <a href="#" title="{{ $static_bookingForm->email_a_title }}" data-toggle="popover"
                  data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->email_a_data_content }}">
                  <i class="fa {{ $static_bookingForm->email_i_class }}"></i>
                </a>
              </label>
              <input class="form-control" name="booking-email" type="email"
                placeholder="{{ $static_bookingForm->email_input_placeholder }}">
            </div>
          </div>
          <!-- ROOM TYPE -->
          <div class="col-md-2">
            <div class="form-group">
              <label>{{ $static_bookingForm->roomtype_text }}
                <a href="#" title="{{ $static_bookingForm->roomtype_a_title }}" data-toggle="popover"
                  data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->roomtype_a_data_content }}">
                  <i class="fa {{ $static_bookingForm->roomtype_i_class }}"></i>
                </a>
              </label>
              <select class="form-control" name="booking-roomtype"
                title="{{ $static_bookingForm->roomtype_select_title }}" data-header="Room Type">
                {{-- ! Reprendre room_categories --}}
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->text }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <!-- DATE -->
          <div class="col-md-2">
            <div class="form-group">
              <label>{{ $static_bookingForm->date_text }}
                <a href="#" title="{{ $static_bookingForm->date_a_title }}" data-toggle="popover"
                  data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->date_a_data_content }}">
                  <i class="fa {{ $static_bookingForm->date_i_class }}"></i>
                </a>
              </label>
              <input type="text" class="datepicker form-control" name="booking-date"
                placeholder="{{ $static_bookingForm->date_input_placeholder }}" readonly="readonly">
            </div>
          </div>
          <!-- GUESTS -->
          <div class="col-md-2">
            <div class="form-group">
              <label>{{ $static_bookingForm->guest_text }}
                <a href="#" title="{{ $static_bookingForm->guest_a_title }}" data-toggle="popover"
                  data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->guest_a_data_content }}">
                  <i class="fa {{ $static_bookingForm->guest_i_class }}"></i>
                </a>
              </label>
              <div class="panel-dropdown">
                <div class="form-control guestspicker">{{ $static_bookingForm->guest_guestpicker }}
                  <span class="gueststotal"></span>
                </div>
                <div class="panel-dropdown-content">
                  <div class="guests-buttons">
                    <label>{{ $static_bookingForm->guest_adult_text }}
                      <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="{{ $static_bookingForm->guest_adult_a_data_content }}"
                        data-original-title="Adults">
                        <i class="fa {{ $static_bookingForm->guest_adult_a_i_class }}"></i>
                      </a>
                    </label>
                    <div class="guests-button">
                      <div class="minus"></div>
                      <input type="text" name="booking-adults" class="booking-guests" value="0">
                      <div class="plus"></div>
                    </div>
                  </div>
                  <div class="guests-buttons">
                    <label>{{ $static_bookingForm->guest_children_text }}
                      <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                        data-content="{{ $static_bookingForm->guest_children_a_data_content }}"
                        data-original-title="Children">
                        <i class="fa {{ $static_bookingForm->guest_children_a_i_class }}"></i>
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
          </div>
          <!-- BOOKING BUTTON -->
          <div class="col-md-2">
            <button type="submit" class="btn btn-book">{{ $static_bookingForm->guest_submit_text }}</button>
            @auth
              <div class="advanced-form-link">
                <a href="{{ $static_bookingForm->guest_submit_a_href }}">
                  {{ $static_bookingForm->guest_submit_a_text }}
                </a>
              @endauth
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>