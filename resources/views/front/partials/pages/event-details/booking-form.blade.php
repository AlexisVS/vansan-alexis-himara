<div class="vertical-booking-form entry-booking-form-left">
  <h3 class="form-title">BOOK YOUR TICKET</h3>
  <div class="inner">
    <form id="booking-form">
      <!-- EMAIL -->
      <div class="form-group">
        <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
      </div>
      <div class="form-group" style="display:none;">
        <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type"
          disabled="disabled">
          <option value="Offer" selected="selected">Offer</option>
        </select>
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
      <button type="submit" class="btn btn-book btn-dark">BOOK A TICKET</button>
      <div class="mt20"></div>
    </form>
  </div>
</div>
