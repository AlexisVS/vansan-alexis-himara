<form class="booking-form-advanced" id="booking-form">
  {{-- Rajouter les informations aussi par les AUTH --}}
  <div class="row">

    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->form_name_text }}</label>
        <input name="booking-name" type="text" class="form-control"
          placeholder="{{ $static_bookingForm->form_name_placeholder }}" {{ auth()->check() ? 'disabled' : null }}
        value="{{ auth()->user()->name ?? null }}">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->form_email_text }}</label>
        <input class="form-control" name="booking-email" type="email"
          placeholder="{{ $static_bookingForm->form_email_placeholder }}" {{ auth()->check() ? 'disabled' : null }}
        value="{{ auth()->user()->email ?? null }}">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->form_phone_text }}</label>
        <input name="booking-phone" type="text" class="form-control" {{ auth()->check() ? 'disabled' : null }}
        placeholder="{{ $static_bookingForm->form_phone_placeholder }}" value="{{ auth()->user()->phone ?? null }}">
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->select_label }}</label>
        <select name="booking-country" class="form-control" title="{{ $static_bookingForm->select_title }}"
          data-header="{{ $static_bookingForm->select_data_header }}" data-live-search="true" data-size="5">
          <option value="{{ $static_bookingFormLand->Afganistan }}">{{ $static_bookingFormLand->Afganistan }}</option>
          <option value="{{ $static_bookingFormLand->Albania }}">{{ $static_bookingFormLand->Albania }}</option>
          <option value="{{ $static_bookingFormLand->Algeria }}">{{ $static_bookingFormLand->Algeria }}</option>
          <option value="{{ $static_bookingFormLand->American_Samoa }}">{{ $static_bookingFormLand->American_Samoa }}
          </option>
          <option value="{{ $static_bookingFormLand->Andorra }}">{{ $static_bookingFormLand->Andorra }}</option>
          <option value="{{ $static_bookingFormLand->Angola }}">{{ $static_bookingFormLand->Angola }}</option>
          <option value="{{ $static_bookingFormLand->Anguilla }}">{{ $static_bookingFormLand->Anguilla }}</option>
          <option value="{{ $static_bookingFormLand->Antigua_Barbuda }}">{{ $static_bookingFormLand->Antigua_Barbuda }}
          </option>
          <option value="{{ $static_bookingFormLand->Argentina }}">{{ $static_bookingFormLand->Argentina }}</option>
          <option value="{{ $static_bookingFormLand->Armenia }}">{{ $static_bookingFormLand->Armenia }}</option>
          <option value="{{ $static_bookingFormLand->Aruba }}">{{ $static_bookingFormLand->Aruba }}</option>
          <option value="{{ $static_bookingFormLand->Australia }}">{{ $static_bookingFormLand->Australia }}</option>
          <option value="{{ $static_bookingFormLand->Austria }}">{{ $static_bookingFormLand->Austria }}</option>
          <option value="{{ $static_bookingFormLand->Azerbaijan }}">{{ $static_bookingFormLand->Azerbaijan }}</option>
          <option value="{{ $static_bookingFormLand->Bahamas }}">{{ $static_bookingFormLand->Bahamas }}</option>
          <option value="{{ $static_bookingFormLand->Bahrain }}">{{ $static_bookingFormLand->Bahrain }}</option>
          <option value="{{ $static_bookingFormLand->Bangladesh }}">{{ $static_bookingFormLand->Bangladesh }}</option>
          <option value="{{ $static_bookingFormLand->Barbados }}">{{ $static_bookingFormLand->Barbados }}</option>
          <option value="{{ $static_bookingFormLand->Belarus }}">{{ $static_bookingFormLand->Belarus }}</option>
          <option value="{{ $static_bookingFormLand->Belgium }}">{{ $static_bookingFormLand->Belgium }}</option>
          <option value="{{ $static_bookingFormLand->Belize }}">{{ $static_bookingFormLand->Belize }}</option>
          <option value="{{ $static_bookingFormLand->Benin }}">{{ $static_bookingFormLand->Benin }}</option>
          <option value="{{ $static_bookingFormLand->Bermuda }}">{{ $static_bookingFormLand->Bermuda }}</option>
          <option value="{{ $static_bookingFormLand->Bhutan }}">{{ $static_bookingFormLand->Bhutan }}</option>
          <option value="{{ $static_bookingFormLand->Bolivia }}">{{ $static_bookingFormLand->Bolivia }}</option>
          <option value="{{ $static_bookingFormLand->Bonaire }}">{{ $static_bookingFormLand->Bonaire }}</option>
          <option value="{{ $static_bookingFormLand->Bosnia_Herzegovina }}">{{
            $static_bookingFormLand->Bosnia_Herzegovina }}</option>
          <option value="{{ $static_bookingFormLand->Botswana }}">{{ $static_bookingFormLand->Botswana }}</option>
          <option value="{{ $static_bookingFormLand->Brazil }}">{{ $static_bookingFormLand->Brazil }}</option>
          <option value="{{ $static_bookingFormLand->British_Indian_Ocean_Ter }}">{{
            $static_bookingFormLand->British_Indian_Ocean_Ter }}</option>
          <option value="{{ $static_bookingFormLand->Brunei }}">{{ $static_bookingFormLand->Brunei }}</option>
          <option value="{{ $static_bookingFormLand->Bulgaria }}">{{ $static_bookingFormLand->Bulgaria }}</option>
          <option value="{{ $static_bookingFormLand->Burkina_Faso }}">{{ $static_bookingFormLand->Burkina_Faso }}
          </option>
          <option value="{{ $static_bookingFormLand->Burundi }}">{{ $static_bookingFormLand->Burundi }}</option>
          <option value="{{ $static_bookingFormLand->Cambodia }}">{{ $static_bookingFormLand->Cambodia }}</option>
          <option value="{{ $static_bookingFormLand->Cameroon }}">{{ $static_bookingFormLand->Cameroon }}</option>
          <option value="{{ $static_bookingFormLand->Canada }}">{{ $static_bookingFormLand->Canada }}</option>
          <option value="{{ $static_bookingFormLand->Canary_Islands }}">{{ $static_bookingFormLand->Canary_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand->Cape_Verde }}">{{ $static_bookingFormLand->Cape_Verde }}</option>
          <option value="{{ $static_bookingFormLand->Cayman_Islands }}">{{ $static_bookingFormLand->Cayman_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand->Central_African_Republic }}">{{
            $static_bookingFormLand->Central_African_Republic }}</option>
          <option value="{{ $static_bookingFormLand->Chad }}">{{ $static_bookingFormLand->Chad }}</option>
          <option value="{{ $static_bookingFormLand->Channel_Islands }}">{{ $static_bookingFormLand->Channel_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand->Chile }}">{{ $static_bookingFormLand->Chile }}</option>
          <option value="{{ $static_bookingFormLand->China }}">{{ $static_bookingFormLand->China }}</option>
          <option value="{{ $static_bookingFormLand->Christmas_Island }}">{{ $static_bookingFormLand->Christmas_Island
            }}</option>
          <option value="{{ $static_bookingFormLand->Cocos_Island }}">{{ $static_bookingFormLand->Cocos_Island }}
          </option>
          <option value="{{ $static_bookingFormLand->Colombia }}">{{ $static_bookingFormLand->Colombia }}</option>
          <option value="{{ $static_bookingFormLand->Comoros }}">{{ $static_bookingFormLand->Comoros }}</option>
          <option value="{{ $static_bookingFormLand->Congo }}">{{ $static_bookingFormLand->Congo }}</option>
          <option value="{{ $static_bookingFormLand->Cook_Islands }}">{{ $static_bookingFormLand->Cook_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand->Costa_Rica }}">{{ $static_bookingFormLand->Costa_Rica }}</option>
          <option value="{{ $static_bookingFormLand->Cote_DIvoire }}">{{ $static_bookingFormLand->Cote_DIvoire }}
          </option>
          <option value="{{ $static_bookingFormLand->Croatia }}">{{ $static_bookingFormLand->Croatia }}</option>
          <option value="{{ $static_bookingFormLand->Cuba }}">{{ $static_bookingFormLand->Cuba }}</option>
          <option value="{{ $static_bookingFormLand->Curaco }}">{{ $static_bookingFormLand->Curaco }}</option>
          <option value="{{ $static_bookingFormLand->Cyprus }}">{{ $static_bookingFormLand->Cyprus }}</option>
          <option value="{{ $static_bookingFormLand->Czech_Republic }}">{{ $static_bookingFormLand->Czech_Republic }}
          </option>
          <option value="{{ $static_bookingFormLand->Denmark }}">{{ $static_bookingFormLand->Denmark }}</option>
          <option value="{{ $static_bookingFormLand->Djibouti }}">{{ $static_bookingFormLand->Djibouti }}</option>
          <option value="{{ $static_bookingFormLand->Dominica }}">{{ $static_bookingFormLand->Dominica }}</option>
          <option value="{{ $static_bookingFormLand->Dominican_Republic }}">{{
            $static_bookingFormLand->Dominican_Republic }}</option>
          <option value="{{ $static_bookingFormLand->East_Timor }}">{{ $static_bookingFormLand->East_Timor }}</option>
          <option value="{{ $static_bookingFormLand->Ecuador }}">{{ $static_bookingFormLand->Ecuador }}</option>
          <option value="{{ $static_bookingFormLand->Egypt }}">{{ $static_bookingFormLand->Egypt }}</option>
          <option value="{{ $static_bookingFormLand->El_Salvador }}">{{ $static_bookingFormLand->El_Salvador }}</option>
          <option value="{{ $static_bookingFormLand->Equatorial_Guinea }}">{{ $static_bookingFormLand->Equatorial_Guinea
            }}</option>
          <option value="{{ $static_bookingFormLand->Eritrea }}">{{ $static_bookingFormLand->Eritrea }}</option>
          <option value="{{ $static_bookingFormLand->Estonia }}">{{ $static_bookingFormLand->Estonia }}</option>
          <option value="{{ $static_bookingFormLand->Ethiopia }}">{{ $static_bookingFormLand->Ethiopia }}</option>
          <option value="{{ $static_bookingFormLand->Falkland_Islands }}">{{ $static_bookingFormLand->Falkland_Islands
            }}</option>
          <option value="{{ $static_bookingFormLand->Faroe_Islands }}">{{ $static_bookingFormLand->Faroe_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand->Fiji }}">{{ $static_bookingFormLand->Fiji }}</option>
          <option value="{{ $static_bookingFormLand->Finland }}">{{ $static_bookingFormLand->Finland }}</option>
          <option value="{{ $static_bookingFormLand->France }}">{{ $static_bookingFormLand->France }}</option>
          <option value="{{ $static_bookingFormLand->French_Guiana }}">{{ $static_bookingFormLand->French_Guiana }}
          </option>
          <option value="{{ $static_bookingFormLand->French_Polynesia }}">{{ $static_bookingFormLand->French_Polynesia
            }}</option>
          <option value="{{ $static_bookingFormLand->French_Southern_Ter }}">{{
            $static_bookingFormLand->French_Southern_Ter }}</option>
          <option value="{{ $static_bookingFormLand->Gabon }}">{{ $static_bookingFormLand->Gabon }}</option>
          <option value="{{ $static_bookingFormLand->Gambia }}">{{ $static_bookingFormLand->Gambia }}</option>
          <option value="{{ $static_bookingFormLand->Georgia }}">{{ $static_bookingFormLand->Georgia }}</option>
          <option value="{{ $static_bookingFormLand->Germany }}">{{ $static_bookingFormLand->Germany }}</option>
          <option value="{{ $static_bookingFormLand->Ghana }}">{{ $static_bookingFormLand->Ghana }}</option>
          <option value="{{ $static_bookingFormLand->Gibraltar }}">{{ $static_bookingFormLand->Gibraltar }}</option>
          <option value="{{ $static_bookingFormLand->Great_Britain }}">{{ $static_bookingFormLand->Great_Britain }}
          </option>
          <option value="{{ $static_bookingFormLand->Greece }}">{{ $static_bookingFormLand->Greece }}</option>
          <option value="{{ $static_bookingFormLand->Greenland }}">{{ $static_bookingFormLand->Greenland }}</option>
          <option value="{{ $static_bookingFormLand->Grenada }}">{{ $static_bookingFormLand->Grenada }}</option>
          <option value="{{ $static_bookingFormLand->Guadeloupe }}">{{ $static_bookingFormLand->Guadeloupe }}</option>
          <option value="{{ $static_bookingFormLand->Guam }}">{{ $static_bookingFormLand->Guam }}</option>
          <option value="{{ $static_bookingFormLand->Guatemala }}">{{ $static_bookingFormLand->Guatemala }}</option>
          <option value="{{ $static_bookingFormLand->Guinea }}">{{ $static_bookingFormLand->Guinea }}</option>
          <option value="{{ $static_bookingFormLand->Guyana }}">{{ $static_bookingFormLand->Guyana }}</option>
          <option value="{{ $static_bookingFormLand->Haiti }}">{{ $static_bookingFormLand->Haiti }}</option>
          <option value="{{ $static_bookingFormLand->Hawaii }}">{{ $static_bookingFormLand->Hawaii }}</option>
          <option value="{{ $static_bookingFormLand->Honduras }}">{{ $static_bookingFormLand->Honduras }}</option>
          <option value="{{ $static_bookingFormLand->Hong_Kong }}">{{ $static_bookingFormLand->Hong_Kong }}</option>
          <option value="{{ $static_bookingFormLand->Hungary }}">{{ $static_bookingFormLand->Hungary }}</option>
          <option value="{{ $static_bookingFormLand->Iceland }}">{{ $static_bookingFormLand->Iceland }}</option>
          <option value="{{ $static_bookingFormLand->India }}">{{ $static_bookingFormLand->India }}</option>
          <option value="{{ $static_bookingFormLand->Indonesia }}">{{ $static_bookingFormLand->Indonesia }}</option>
          <option value="{{ $static_bookingFormLand->Iran }}">{{ $static_bookingFormLand->Iran }}</option>
          <option value="{{ $static_bookingFormLand->Iraq }}">{{ $static_bookingFormLand->Iraq }}</option>
          <option value="{{ $static_bookingFormLand->Ireland }}">{{ $static_bookingFormLand->Ireland }}</option>
          <option value="{{ $static_bookingFormLand->Isle_of_Man }}">{{ $static_bookingFormLand->Isle_of_Man }}</option>
          <option value="{{ $static_bookingFormLand->Israel }}">{{ $static_bookingFormLand->Israel }}</option>
          <option value="{{ $static_bookingFormLand->Italy }}">{{ $static_bookingFormLand->Italy }}</option>
          <option value="{{ $static_bookingFormLand->Jamaica }}">{{ $static_bookingFormLand->Jamaica }}</option>
          <option value="{{ $static_bookingFormLand->Japan }}">{{ $static_bookingFormLand->Japan }}</option>
          <option value="{{ $static_bookingFormLand->Jordan }}">{{ $static_bookingFormLand->Jordan }}</option>
          <option value="{{ $static_bookingFormLand->Kazakhstan }}">{{ $static_bookingFormLand->Kazakhstan }}</option>
          <option value="{{ $static_bookingFormLand->Kenya }}">{{ $static_bookingFormLand->Kenya }}</option>
          <option value="{{ $static_bookingFormLand->Kiribati }}">{{ $static_bookingFormLand->Kiribati }}</option>
          <option value="{{ $static_bookingFormLand->Korea_North }}">{{ $static_bookingFormLand->Korea_North }}</option>
          <option value="{{ $static_bookingFormLand->Korea_Sout }}">{{ $static_bookingFormLand->Korea_Sout }}</option>
          <option value="{{ $static_bookingFormLand->Kuwait }}">{{ $static_bookingFormLand->Kuwait }}</option>
          <option value="{{ $static_bookingFormLand->Kyrgyzstan }}">{{ $static_bookingFormLand->Kyrgyzstan }}</option>
          <option value="{{ $static_bookingFormLand->Laos }}">{{ $static_bookingFormLand->Laos }}</option>
          <option value="{{ $static_bookingFormLand->Latvia }}">{{ $static_bookingFormLand->Latvia }}</option>
          <option value="{{ $static_bookingFormLand->Lebanon }}">{{ $static_bookingFormLand->Lebanon }}</option>
          <option value="{{ $static_bookingFormLand->Lesotho }}">{{ $static_bookingFormLand->Lesotho }}</option>
          <option value="{{ $static_bookingFormLand->Liberia }}">{{ $static_bookingFormLand->Liberia }}</option>
          <option value="{{ $static_bookingFormLand->Libya }}">{{ $static_bookingFormLand->Libya }}</option>
          <option value="{{ $static_bookingFormLand->Liechtenstein }}">{{ $static_bookingFormLand->Liechtenstein }}
          </option>
          <option value="{{ $static_bookingFormLand2->Lithuania }}">{{ $static_bookingFormLand2->Lithuania }}</option>
          <option value="{{ $static_bookingFormLand2->Luxembourg }}">{{ $static_bookingFormLand2->Luxembourg }}</option>
          <option value="{{ $static_bookingFormLand2->Macau }}">{{ $static_bookingFormLand2->Macau }}</option>
          <option value="{{ $static_bookingFormLand2->Macedonia }}">{{ $static_bookingFormLand2->Macedonia }}</option>
          <option value="{{ $static_bookingFormLand2->Madagascar }}">{{ $static_bookingFormLand2->Madagascar }}</option>
          <option value="{{ $static_bookingFormLand2->Malaysia }}">{{ $static_bookingFormLand2->Malaysia }}</option>
          <option value="{{ $static_bookingFormLand2->Malawi }}">{{ $static_bookingFormLand2->Malawi }}</option>
          <option value="{{ $static_bookingFormLand2->Maldives }}">{{ $static_bookingFormLand2->Maldives }}</option>
          <option value="{{ $static_bookingFormLand2->Mali }}">{{ $static_bookingFormLand2->Mali }}</option>
          <option value="{{ $static_bookingFormLand2->Malta }}">{{ $static_bookingFormLand2->Malta }}</option>
          <option value="{{ $static_bookingFormLand2->Marshall_Islands }}">{{ $static_bookingFormLand2->Marshall_Islands
            }}</option>
          <option value="{{ $static_bookingFormLand2->Martinique }}">{{ $static_bookingFormLand2->Martinique }}</option>
          <option value="{{ $static_bookingFormLand2->Mauritania }}">{{ $static_bookingFormLand2->Mauritania }}</option>
          <option value="{{ $static_bookingFormLand2->Mauritius }}">{{ $static_bookingFormLand2->Mauritius }}</option>
          <option value="{{ $static_bookingFormLand2->Mayotte }}">{{ $static_bookingFormLand2->Mayotte }}</option>
          <option value="{{ $static_bookingFormLand2->Mexico }}">{{ $static_bookingFormLand2->Mexico }}</option>
          <option value="{{ $static_bookingFormLand2->Midway_Islands }}">{{ $static_bookingFormLand2->Midway_Islands }}
          </option>
          <option value="{{ $static_bookingFormLand2->Moldova }}">{{ $static_bookingFormLand2->Moldova }}</option>
          <option value="{{ $static_bookingFormLand2->Monaco }}">{{ $static_bookingFormLand2->Monaco }}</option>
          <option value="{{ $static_bookingFormLand2->Mongolia }}">{{ $static_bookingFormLand2->Mongolia }}</option>
          <option value="{{ $static_bookingFormLand2->Montserrat }}">{{ $static_bookingFormLand2->Montserrat }}</option>
          <option value="{{ $static_bookingFormLand2->Morocco }}">{{ $static_bookingFormLand2->Morocco }}</option>
          <option value="{{ $static_bookingFormLand2->Mozambique }}">{{ $static_bookingFormLand2->Mozambique }}</option>
          <option value="{{ $static_bookingFormLand2->Myanmar }}">{{ $static_bookingFormLand2->Myanmar }}</option>
          <option value="{{ $static_bookingFormLand2->Nambia }}">{{ $static_bookingFormLand2->Nambia }}</option>
          <option value="{{ $static_bookingFormLand2->Nauru }}">{{ $static_bookingFormLand2->Nauru }}</option>
          <option value="{{ $static_bookingFormLand2->Nepal }}">{{ $static_bookingFormLand2->Nepal }}</option>
          <option value="{{ $static_bookingFormLand2->Netherland_Antilles }}">{{
            $static_bookingFormLand2->Netherland_Antilles }}</option>
          <option value="{{ $static_bookingFormLand2->Netherlands }}">{{ $static_bookingFormLand2->Netherlands }}
          </option>
          <option value="{{ $static_bookingFormLand2->Nevis }}">{{ $static_bookingFormLand2->Nevis }}</option>
          <option value="{{ $static_bookingFormLand2->New_Caledonia }}">{{ $static_bookingFormLand2->New_Caledonia }}
          </option>
          <option value="{{ $static_bookingFormLand2->New_Zealand }}">{{ $static_bookingFormLand2->New_Zealand }}
          </option>
          <option value="{{ $static_bookingFormLand2->Nicaragua }}">{{ $static_bookingFormLand2->Nicaragua }}</option>
          <option value="{{ $static_bookingFormLand2->Niger }}">{{ $static_bookingFormLand2->Niger }}</option>
          <option value="{{ $static_bookingFormLand2->Nigeria }}">{{ $static_bookingFormLand2->Nigeria }}</option>
          <option value="{{ $static_bookingFormLand2->Niue }}">{{ $static_bookingFormLand2->Niue }}</option>
          <option value="{{ $static_bookingFormLand2->Norfolk_Island }}">{{ $static_bookingFormLand2->Norfolk_Island }}
          </option>
          <option value="{{ $static_bookingFormLand2->Norway }}">{{ $static_bookingFormLand2->Norway }}</option>
          <option value="{{ $static_bookingFormLand2->Oman }}">{{ $static_bookingFormLand2->Oman }}</option>
          <option value="{{ $static_bookingFormLand2->Pakistan }}">{{ $static_bookingFormLand2->Pakistan }}</option>
          <option value="{{ $static_bookingFormLand2->Palau_Island }}">{{ $static_bookingFormLand2->Palau_Island }}
          </option>
          <option value="{{ $static_bookingFormLand2->Palestine }}">{{ $static_bookingFormLand2->Palestine }}</option>
          <option value="{{ $static_bookingFormLand2->Panama }}">{{ $static_bookingFormLand2->Panama }}</option>
          <option value="{{ $static_bookingFormLand2->Papua_New_Guinea }}">{{ $static_bookingFormLand2->Papua_New_Guinea
            }}</option>
          <option value="{{ $static_bookingFormLand2->Paraguay }}">{{ $static_bookingFormLand2->Paraguay }}</option>
          <option value="{{ $static_bookingFormLand2->Peru }}">{{ $static_bookingFormLand2->Peru }}</option>
          <option value="{{ $static_bookingFormLand2->Phillipines }}">{{ $static_bookingFormLand2->Phillipines }}
          </option>
          <option value="{{ $static_bookingFormLand2->Pitcairn_Island }}">{{ $static_bookingFormLand2->Pitcairn_Island
            }}</option>
          <option value="{{ $static_bookingFormLand2->Poland }}">{{ $static_bookingFormLand2->Poland }}</option>
          <option value="{{ $static_bookingFormLand2->Portugal }}">{{ $static_bookingFormLand2->Portugal }}</option>
          <option value="{{ $static_bookingFormLand2->Puerto_Rico }}">{{ $static_bookingFormLand2->Puerto_Rico }}
          </option>
          <option value="{{ $static_bookingFormLand2->Qatar }}">{{ $static_bookingFormLand2->Qatar }}</option>
          <option value="{{ $static_bookingFormLand2->Republic_of_Montenegro }}">{{
            $static_bookingFormLand2->Republic_of_Montenegro }}</option>
          <option value="{{ $static_bookingFormLand2->Republic_of_Serbia }}">{{
            $static_bookingFormLand2->Republic_of_Serbia }}</option>
          <option value="{{ $static_bookingFormLand2->Reunion }}">{{ $static_bookingFormLand2->Reunion }}</option>
          <option value="{{ $static_bookingFormLand2->Romania }}">{{ $static_bookingFormLand2->Romania }}</option>
          <option value="{{ $static_bookingFormLand2->Russia }}">{{ $static_bookingFormLand2->Russia }}</option>
          <option value="{{ $static_bookingFormLand2->Rwanda }}">{{ $static_bookingFormLand2->Rwanda }}</option>
          <option value="{{ $static_bookingFormLand2->St_Barthelemy }}">{{ $static_bookingFormLand2->St_Barthelemy }}
          </option>
          <option value="{{ $static_bookingFormLand2->St_Eustatius }}">{{ $static_bookingFormLand2->St_Eustatius }}
          </option>
          <option value="{{ $static_bookingFormLand2->St_Helena }}">{{ $static_bookingFormLand2->St_Helena }}</option>
          <option value="{{ $static_bookingFormLand2->St_Kitts_Nevis }}">{{ $static_bookingFormLand2->St_Kitts_Nevis }}
          </option>
          <option value="{{ $static_bookingFormLand2->St_Lucia }}">{{ $static_bookingFormLand2->St_Lucia }}</option>
          <option value="{{ $static_bookingFormLand2->St_Maarten }}">{{ $static_bookingFormLand2->St_Maarten }}</option>
          <option value="{{ $static_bookingFormLand2->St_Pierre_Miquelon }}">{{
            $static_bookingFormLand2->St_Pierre_Miquelon }}</option>
          <option value="{{ $static_bookingFormLand2->St_Vincent_Grenadines }}">{{
            $static_bookingFormLand2->St_Vincent_Grenadines }}</option>
          <option value="{{ $static_bookingFormLand2->Saipan }}">{{ $static_bookingFormLand2->Saipan }}</option>
          <option value="{{ $static_bookingFormLand2->Samoa }}">{{ $static_bookingFormLand2->Samoa }}</option>
          <option value="{{ $static_bookingFormLand2->Samoa_American }}">{{ $static_bookingFormLand2->Samoa_American }}
          </option>
          <option value="{{ $static_bookingFormLand2->San_Marino }}">{{ $static_bookingFormLand2->San_Marino }}</option>
          <option value="{{ $static_bookingFormLand2->Sao_Tome_Principe }}">{{
            $static_bookingFormLand2->Sao_Tome_Principe }}</option>
          <option value="{{ $static_bookingFormLand2->Saudi_Arabia }}">{{ $static_bookingFormLand2->Saudi_Arabia }}
          </option>
          <option value="{{ $static_bookingFormLand2->Senegal }}">{{ $static_bookingFormLand2->Senegal }}</option>
          <option value="{{ $static_bookingFormLand2->Serbia }}">{{ $static_bookingFormLand2->Serbia }}</option>
          <option value="{{ $static_bookingFormLand2->Seychelles }}">{{ $static_bookingFormLand2->Seychelles }}</option>
          <option value="{{ $static_bookingFormLand2->Sierra_Leone }}">{{ $static_bookingFormLand2->Sierra_Leone }}
          </option>
          <option value="{{ $static_bookingFormLand2->Singapore }}">{{ $static_bookingFormLand2->Singapore }}</option>
          <option value="{{ $static_bookingFormLand2->Slovakia }}">{{ $static_bookingFormLand2->Slovakia }}</option>
          <option value="{{ $static_bookingFormLand2->Slovenia }}">{{ $static_bookingFormLand2->Slovenia }}</option>
          <option value="{{ $static_bookingFormLand2->Solomon_Islands }}">{{ $static_bookingFormLand2->Solomon_Islands
            }}</option>
          <option value="{{ $static_bookingFormLand2->Somalia }}">{{ $static_bookingFormLand2->Somalia }}</option>
          <option value="{{ $static_bookingFormLand2->South_Africa }}">{{ $static_bookingFormLand2->South_Africa }}
          </option>
          <option value="{{ $static_bookingFormLand2->Spain }}">{{ $static_bookingFormLand2->Spain }}</option>
          <option value="{{ $static_bookingFormLand2->Sri_Lanka }}">{{ $static_bookingFormLand2->Sri_Lanka }}</option>
          <option value="{{ $static_bookingFormLand2->Sudan }}">{{ $static_bookingFormLand2->Sudan }}</option>
          <option value="{{ $static_bookingFormLand2->Suriname }}">{{ $static_bookingFormLand2->Suriname }}</option>
          <option value="{{ $static_bookingFormLand2->Swaziland }}">{{ $static_bookingFormLand2->Swaziland }}</option>
          <option value="{{ $static_bookingFormLand2->Sweden }}">{{ $static_bookingFormLand2->Sweden }}</option>
          <option value="{{ $static_bookingFormLand2->Switzerland }}">{{ $static_bookingFormLand2->Switzerland }}
          </option>
          <option value="{{ $static_bookingFormLand2->Syria }}">{{ $static_bookingFormLand2->Syria }}</option>
          <option value="{{ $static_bookingFormLand2->Tahiti }}">{{ $static_bookingFormLand2->Tahiti }}</option>
          <option value="{{ $static_bookingFormLand2->Taiwan }}">{{ $static_bookingFormLand2->Taiwan }}</option>
          <option value="{{ $static_bookingFormLand2->Tajikistan }}">{{ $static_bookingFormLand2->Tajikistan }}</option>
          <option value="{{ $static_bookingFormLand2->Tanzania }}">{{ $static_bookingFormLand2->Tanzania }}</option>
          <option value="{{ $static_bookingFormLand2->Thailand }}">{{ $static_bookingFormLand2->Thailand }}</option>
          <option value="{{ $static_bookingFormLand2->Togo }}">{{ $static_bookingFormLand2->Togo }}</option>
          <option value="{{ $static_bookingFormLand2->Tokelau }}">{{ $static_bookingFormLand2->Tokelau }}</option>
          <option value="{{ $static_bookingFormLand2->Tonga }}">{{ $static_bookingFormLand2->Tonga }}</option>
          <option value="{{ $static_bookingFormLand2->Trinidad_Tobago }}">{{ $static_bookingFormLand2->Trinidad_Tobago
            }}</option>
          <option value="{{ $static_bookingFormLand2->Tunisia }}">{{ $static_bookingFormLand2->Tunisia }}</option>
          <option value="{{ $static_bookingFormLand2->Turkey }}">{{ $static_bookingFormLand2->Turkey }}</option>
          <option value="{{ $static_bookingFormLand2->Turkmenistan }}">{{ $static_bookingFormLand2->Turkmenistan }}
          </option>
          <option value="{{ $static_bookingFormLand2->Turks_Caicos_Is }}">{{ $static_bookingFormLand2->Turks_Caicos_Is
            }}</option>
          <option value="{{ $static_bookingFormLand2->Tuvalu }}">{{ $static_bookingFormLand2->Tuvalu }}</option>
          <option value="{{ $static_bookingFormLand2->Uganda }}">{{ $static_bookingFormLand2->Uganda }}</option>
          <option value="{{ $static_bookingFormLand2->Ukraine }}">{{ $static_bookingFormLand2->Ukraine }}</option>
          <option value="{{ $static_bookingFormLand2->United_Arab_Erimates }}">{{
            $static_bookingFormLand2->United_Arab_Erimates }}</option>
          <option value="{{ $static_bookingFormLand2->United_Kingdom }}">{{ $static_bookingFormLand2->United_Kingdom }}
          </option>
          <option value="{{ $static_bookingFormLand2->United_States_of_America }}">{{
            $static_bookingFormLand2->United_States_of_America }}</option>
          <option value="{{ $static_bookingFormLand2->Uraguay }}">{{ $static_bookingFormLand2->Uraguay }}</option>
          <option value="{{ $static_bookingFormLand2->Uzbekistan }}">{{ $static_bookingFormLand2->Uzbekistan }}</option>
          <option value="{{ $static_bookingFormLand2->Vanuatu }}">{{ $static_bookingFormLand2->Vanuatu }}</option>
          <option value="{{ $static_bookingFormLand2->Vatican_City_State }}">{{
            $static_bookingFormLand2->Vatican_City_State }}</option>
          <option value="{{ $static_bookingFormLand2->Venezuela }}">{{ $static_bookingFormLand2->Venezuela }}</option>
          <option value="{{ $static_bookingFormLand2->Vietnam }}">{{ $static_bookingFormLand2->Vietnam }}</option>
          <option value="{{ $static_bookingFormLand2->Virgin_Islands_Brit }}">{{
            $static_bookingFormLand2->Virgin_Islands_Brit }}</option>
          <option value="{{ $static_bookingFormLand2->Virgin_Islands_USA }}">{{
            $static_bookingFormLand2->Virgin_Islands_USA }}</option>
          <option value="{{ $static_bookingFormLand2->Wake_Island }}">{{ $static_bookingFormLand2->Wake_Island }}
          </option>
          <option value="{{ $static_bookingFormLand2->Wallis_Futana_Is }}">{{ $static_bookingFormLand2->Wallis_Futana_Is
            }}</option>
          <option value="{{ $static_bookingFormLand2->Yemen }}">{{ $static_bookingFormLand2->Yemen }}</option>
          <option value="{{ $static_bookingFormLand2->Zaire }}">{{ $static_bookingFormLand2->Zaire }}</option>
          <option value="{{ $static_bookingFormLand2->Zambia }}">{{ $static_bookingFormLand2->Zambia }}</option>
          <option value="{{ $static_bookingFormLand2->Zimbabwe }}">{{ $static_bookingFormLand2->Zimbabwe }}</option>
        </select>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->form_check_text }}
          <a href="#" title="{{ $static_bookingForm->form_check_title }}" data-toggle="popover" data-placement="top"
            data-trigger="hover" data-content="{{ $static_bookingForm->form_check_data_content }}">
            <i class="fa {{ $static_bookingForm->form_check_i_class }}"></i>
          </a>
        </label>
        <input type="text" class="datepicker form-control " name="booking-date" readonly="readonly"
          value="{{ $dataForm['form_booking_roomType'] ?? false ? $dataForm['form_booking_roomType'] : '' }}" 
          {{ $dataForm['form_booking_roomType'] ?? false ? 'disabled' : null }}>
      </div>
    </div>

    {{-- Guest --}}
    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->guest_text }}
          <a href="#" title="{{ $static_bookingForm->guest_title }}" data-toggle="popover" data-placement="top"
            data-trigger="hover" data-content="{{ $static_bookingForm->guest_data_content }}">
            <i class="fa {{ $static_bookingForm->guest_i_class }}"></i>
          </a>
        </label>
        <div class="panel-dropdown">
          <div class="form-control guestspicker" style="{{$dataForm['form_adults'] ?? false ? 'pointer-events:
            none' : null }}">{{ $static_bookingForm->dropdown_text }}
            <span class="gueststotal">
              @if ($dataForm['form_adults'] ?? false)
              {{ $dataForm['form_adults'] + $dataForm['form_children'] }}
              @endif
            </span>
          </div>
          <div class="panel-dropdown-content">
            <div class="guests-buttons">
              <label>{{ $static_bookingForm->dropdown_adult_text }}
                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->dropdown_adult_data_content }}" data-original-title="Adults">
                  <i class="fa {{ $static_bookingForm->dropdown_adult_i_class }}"></i>
                </a>
              </label>
              <div class="guests-button">
                <div class="minus"></div>
                <input type="text" name="booking-adults" class="booking-guests" value="0">
                <div class="plus"></div>
              </div>
            </div>
            <div class="guests-buttons">
              <label>{{ $static_bookingForm->dropdown_children_text }}
                <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover"
                  data-content="{{ $static_bookingForm->dropdown_children_data_content }}"
                  data-original-title="Children">
                  <i class="fa {{ $static_bookingForm->dropdown_children_i_class }}"></i>
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

    {{-- room type --}}
    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->room_type_title }}</label>
        <select name="booking-roomtype" class="form-control" 
        @if ($dataForm['form_categoryId'] ?? false && $rooms->where('room_category_id', '=', $dataForm['form_categoryId']) )
          title="{{$rooms->where('room_category_id', $dataForm['form_categoryId'])[0]->categories->text }}" disabled 
          @else
          title="{{ $static_bookingForm->room_type_select_title }}"
          @endif
          data-header="{{ $static_bookingForm->room_type_select_data_header }}" {{ $dataForm['form_categoryId']
          ?? false
          ? 'disabled' : null }}>

          @if ($dataForm['form_categoryId'] ?? false && $rooms->where('room_category_id', $dataForm['form_categoryId']))
          <option value="{{ $rooms->where('room_category_id', $dataForm['form_categoryId'])[0]->categories->value }}">
            {{$rooms->where('room_category_id', $dataForm['form_categoryId'])[0]->categories->text }}
          </option>
          @else
          @foreach ($categories as $category )
          <option value="{{ $category->value }}">
            {{ $category->text }}
          </option>
          @endforeach
          @endif
        </select>
      </div>
    </div>
    {{-- room Name --}}
    <div class="col-md-6">
      <div class="form-group">
        <label>{{ $static_bookingForm->room_name_title }}</label>
        <select name="booking-roomtype" class="form-control" @if ($dataForm['form_roomId'] ?? false &&
          $rooms->where('id', '=', $dataForm['form_roomId']) )
          title="{{$rooms->where('id', $dataForm['form_roomId'])[0]->name }}" disabled 
          @else
          title="{{ $static_bookingForm->room_name_select_title }}"
          @endif

          data-header="{{ $static_bookingForm->room_name_select_data_header }}" {{ $dataForm['form_roomId'] ?? false ?
          'disabled' : null }}>
          @if ($dataForm['form_home'] ?? false)
          @foreach ($rooms->where('available', '=', true)->where('room_category_id', $dataForm['form_categoryId']) as $room )
          <option value="{{ $room->id }}"
            data-subtext="<span class='badge badge-info'>€{{ $room->price }} / night</span>">
            {{ $room->name }}
          </option>
          @endforeach
          @elseif ($dataForm['form_roomId'] ?? false && $rooms->where('id', $dataForm['form_roomId']))
          <option value="{{ $rooms->where('id', $dataForm['form_roomId'])[0]->id }}"
            data-subtext="<span class='badge badge-info'>€{{ $rooms->where('id', $dataForm['form_roomId'])[0]->price }} / night</span>">
            {{$rooms->where('id', $dataForm['form_roomId'])[0]->name }}
          </option>
          @else
          @foreach ($rooms->where('available', '=', true) as $room )
          <option value="{{ $room->id }}"
            data-subtext="<span class='badge badge-info'>€{{ $room->price }} / night</span>">
            {{ $room->name }}
          </option>
          @endforeach
          @endif
        </select>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label>{{ $static_bookingForm->comment_title }}</label>
        <textarea class="form-control" name="booking-comments"
          placeholder="{{ $static_bookingForm->comment_placeholder }}"></textarea>
      </div>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn mt50 float-right">
        <i class="fa {{ $static_bookingForm->submit_i_class }}" aria-hidden="true"></i>
        {{ $static_bookingForm->submit_text }}
      </button>
    </div>
  </div>
</form>