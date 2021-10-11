<div class="sidebar">
  <!-- WIDGET -->
  <aside class="widget noborder">
    <div class="vertical-booking-form">
      <div id="booking-notification" class="notification"></div>
      <h3 class="form-title">BOOK YOUR ROOM</h3>
      <div class="inner">
        <form id="booking-form">
          <!-- EMAIL -->
          <div class="form-group">
            <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
          </div>
          <!-- ROOM TYPE -->
          <div class="form-group">
            <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type"
              disabled="disabled">
              <option value="Single" selected="selected">Single Room</option>
              <option value="Double">Double Room</option>
              <option value="Deluxe">Deluxe Room</option>
            </select>
          </div>
          <!-- DATE -->
          <div class="form-group">
            <div class="form_date">
              <input type="text" class="datepicker form-control" name="booking-checkin"
                placeholder="Slect Arrival & Departure Date" readonly="readonly">
            </div>
          </div>
          <!-- GUESTS -->
          <div class="form-group">
            <div class="panel-dropdown">
              <div class="form-control guestspicker">Guests
                <span class="gueststotal"></span>
              </div>
              <div class="panel-dropdown-content">
                <div class="guests-buttons">
                  <label>Adults
                    <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                      data-content="18+ years" data-original-title="Adults">
                      <i class="fa fa-info-circle"></i>
                    </a>
                  </label>
                  <div class="guests-button">
                    <div class="minus"></div>
                    <input type="text" name="booking-adults" class="booking-guests" value="0">
                    <div class="plus"></div>
                  </div>
                </div>
                <div class="guests-buttons">
                  <label>Cildren
                    <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                      data-content="Under 18 years" data-original-title="Children">
                      <i class="fa fa-info-circle"></i>
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
          <!-- BOOKING BUTTON -->
          <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</button>
        </form>
      </div>
    </div>
  </aside>
</div>
