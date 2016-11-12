@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-3 col-md-2 sidebar">
      @include('partials.adminsidebar')
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
          </button>
          <p>{{ $message }}</p>
        </div>
      @endif

      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.burgers') }}">Burgers</a></li>
        <li class="active">Create burger</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.burgers') }}"> Back</a>
      </div>

      <h1 class="page-header">Create a burger</h1>

      @if (count($errors) > 0)
        <div class="alert alert-danger">
    			<strong>Whoops!</strong> There were some problems with your input.<br><br>
    			<ul>
    				@foreach ($errors->all() as $error)
    					<li>{{ $error }}</li>
    				@endforeach
    			</ul>
    		</div>
    	@endif

      {!! Form::open(array('route' => 'admin.burgers.store','method'=>'POST','class' => 'form-horizontal')) !!}


      <div class="row">
        <div class="col-md-6">

          <div class="form-group">
            <label for="title_en" class="col-sm-2 control-label">Name (EN)</label>
            <div class="col-sm-10">
              {!! Form::text('title_en', null, array('placeholder' => 'Ex: THE GREAT BURGER','class' => 'form-control','id' => 'title_en')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="title_ja" class="col-sm-2 control-label">Name (JA)</label>
            <div class="col-sm-10">
              {!! Form::text('title_ja', null, array('placeholder' => 'Ex: ザ グレートバーガー','class' => 'form-control','id' => 'title_ja')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="address_1" class="col-sm-2 control-label">Address 1</label>
            <div class="col-sm-10">
              {!! Form::text('address_1', null, array('placeholder' => '6-12-5 Jingumae','class' => 'form-control','id' => 'address_1')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="address_2" class="col-sm-2 control-label">Address 2</label>
            <div class="col-sm-10">
              {!! Form::text('address_2', null, array('placeholder' => 'Sunny Plaza Bldg.','class' => 'form-control','id' => 'address_2')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="address_3" class="col-sm-2 control-label">Address 3</label>
            <div class="col-sm-10">
              {!! Form::text('address_3', null, array('placeholder' => '1F','class' => 'form-control','id' => 'address_3')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="municipality" class="col-sm-2 control-label">Municipality</label>
            <div class="col-sm-10">
              {!! Form::text('municipality', null, array('placeholder' => 'Shibuya Ku','class' => 'form-control','id' => 'municipality')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="prefecture" class="col-sm-2 control-label">Prefecture</label>
            <div class="col-sm-10">
              {!! Form::text('prefecture', null, array('placeholder' => 'Tōkyo To','class' => 'form-control','id' => 'prefecture')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="postcode" class="col-sm-2 control-label">Postcode</label>
            <div class="col-sm-10">
              {!! Form::text('postcode', null, array('placeholder' => '150-0001','class' => 'form-control','id' => 'postcode')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
              <select class="form-control">
              	<option value="AF">Afghanistan</option>
              	<option value="AX">Åland Islands</option>
              	<option value="AL">Albania</option>
              	<option value="DZ">Algeria</option>
              	<option value="AS">American Samoa</option>
              	<option value="AD">Andorra</option>
              	<option value="AO">Angola</option>
              	<option value="AI">Anguilla</option>
              	<option value="AQ">Antarctica</option>
              	<option value="AG">Antigua and Barbuda</option>
              	<option value="AR">Argentina</option>
              	<option value="AM">Armenia</option>
              	<option value="AW">Aruba</option>
              	<option value="AU">Australia</option>
              	<option value="AT">Austria</option>
              	<option value="AZ">Azerbaijan</option>
              	<option value="BS">Bahamas</option>
              	<option value="BH">Bahrain</option>
              	<option value="BD">Bangladesh</option>
              	<option value="BB">Barbados</option>
              	<option value="BY">Belarus</option>
              	<option value="BE">Belgium</option>
              	<option value="BZ">Belize</option>
              	<option value="BJ">Benin</option>
              	<option value="BM">Bermuda</option>
              	<option value="BT">Bhutan</option>
              	<option value="BO">Bolivia, Plurinational State of</option>
              	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
              	<option value="BA">Bosnia and Herzegovina</option>
              	<option value="BW">Botswana</option>
              	<option value="BV">Bouvet Island</option>
              	<option value="BR">Brazil</option>
              	<option value="IO">British Indian Ocean Territory</option>
              	<option value="BN">Brunei Darussalam</option>
              	<option value="BG">Bulgaria</option>
              	<option value="BF">Burkina Faso</option>
              	<option value="BI">Burundi</option>
              	<option value="KH">Cambodia</option>
              	<option value="CM">Cameroon</option>
              	<option value="CA">Canada</option>
              	<option value="CV">Cape Verde</option>
              	<option value="KY">Cayman Islands</option>
              	<option value="CF">Central African Republic</option>
              	<option value="TD">Chad</option>
              	<option value="CL">Chile</option>
              	<option value="CN">China</option>
              	<option value="CX">Christmas Island</option>
              	<option value="CC">Cocos (Keeling) Islands</option>
              	<option value="CO">Colombia</option>
              	<option value="KM">Comoros</option>
              	<option value="CG">Congo</option>
              	<option value="CD">Congo, the Democratic Republic of the</option>
              	<option value="CK">Cook Islands</option>
              	<option value="CR">Costa Rica</option>
              	<option value="CI">Côte d'Ivoire</option>
              	<option value="HR">Croatia</option>
              	<option value="CU">Cuba</option>
              	<option value="CW">Curaçao</option>
              	<option value="CY">Cyprus</option>
              	<option value="CZ">Czech Republic</option>
              	<option value="DK">Denmark</option>
              	<option value="DJ">Djibouti</option>
              	<option value="DM">Dominica</option>
              	<option value="DO">Dominican Republic</option>
              	<option value="EC">Ecuador</option>
              	<option value="EG">Egypt</option>
              	<option value="SV">El Salvador</option>
              	<option value="GQ">Equatorial Guinea</option>
              	<option value="ER">Eritrea</option>
              	<option value="EE">Estonia</option>
              	<option value="ET">Ethiopia</option>
              	<option value="FK">Falkland Islands (Malvinas)</option>
              	<option value="FO">Faroe Islands</option>
              	<option value="FJ">Fiji</option>
              	<option value="FI">Finland</option>
              	<option value="FR">France</option>
              	<option value="GF">French Guiana</option>
              	<option value="PF">French Polynesia</option>
              	<option value="TF">French Southern Territories</option>
              	<option value="GA">Gabon</option>
              	<option value="GM">Gambia</option>
              	<option value="GE">Georgia</option>
              	<option value="DE">Germany</option>
              	<option value="GH">Ghana</option>
              	<option value="GI">Gibraltar</option>
              	<option value="GR">Greece</option>
              	<option value="GL">Greenland</option>
              	<option value="GD">Grenada</option>
              	<option value="GP">Guadeloupe</option>
              	<option value="GU">Guam</option>
              	<option value="GT">Guatemala</option>
              	<option value="GG">Guernsey</option>
              	<option value="GN">Guinea</option>
              	<option value="GW">Guinea-Bissau</option>
              	<option value="GY">Guyana</option>
              	<option value="HT">Haiti</option>
              	<option value="HM">Heard Island and McDonald Islands</option>
              	<option value="VA">Holy See (Vatican City State)</option>
              	<option value="HN">Honduras</option>
              	<option value="HK">Hong Kong</option>
              	<option value="HU">Hungary</option>
              	<option value="IS">Iceland</option>
              	<option value="IN">India</option>
              	<option value="ID">Indonesia</option>
              	<option value="IR">Iran, Islamic Republic of</option>
              	<option value="IQ">Iraq</option>
              	<option value="IE">Ireland</option>
              	<option value="IM">Isle of Man</option>
              	<option value="IL">Israel</option>
              	<option value="IT">Italy</option>
              	<option value="JM">Jamaica</option>
              	<option value="JP" selected>Japan</option>
              	<option value="JE">Jersey</option>
              	<option value="JO">Jordan</option>
              	<option value="KZ">Kazakhstan</option>
              	<option value="KE">Kenya</option>
              	<option value="KI">Kiribati</option>
              	<option value="KP">Korea, Democratic People's Republic of</option>
              	<option value="KR">Korea, Republic of</option>
              	<option value="KW">Kuwait</option>
              	<option value="KG">Kyrgyzstan</option>
              	<option value="LA">Lao People's Democratic Republic</option>
              	<option value="LV">Latvia</option>
              	<option value="LB">Lebanon</option>
              	<option value="LS">Lesotho</option>
              	<option value="LR">Liberia</option>
              	<option value="LY">Libya</option>
              	<option value="LI">Liechtenstein</option>
              	<option value="LT">Lithuania</option>
              	<option value="LU">Luxembourg</option>
              	<option value="MO">Macao</option>
              	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
              	<option value="MG">Madagascar</option>
              	<option value="MW">Malawi</option>
              	<option value="MY">Malaysia</option>
              	<option value="MV">Maldives</option>
              	<option value="ML">Mali</option>
              	<option value="MT">Malta</option>
              	<option value="MH">Marshall Islands</option>
              	<option value="MQ">Martinique</option>
              	<option value="MR">Mauritania</option>
              	<option value="MU">Mauritius</option>
              	<option value="YT">Mayotte</option>
              	<option value="MX">Mexico</option>
              	<option value="FM">Micronesia, Federated States of</option>
              	<option value="MD">Moldova, Republic of</option>
              	<option value="MC">Monaco</option>
              	<option value="MN">Mongolia</option>
              	<option value="ME">Montenegro</option>
              	<option value="MS">Montserrat</option>
              	<option value="MA">Morocco</option>
              	<option value="MZ">Mozambique</option>
              	<option value="MM">Myanmar</option>
              	<option value="NA">Namibia</option>
              	<option value="NR">Nauru</option>
              	<option value="NP">Nepal</option>
              	<option value="NL">Netherlands</option>
              	<option value="NC">New Caledonia</option>
              	<option value="NZ">New Zealand</option>
              	<option value="NI">Nicaragua</option>
              	<option value="NE">Niger</option>
              	<option value="NG">Nigeria</option>
              	<option value="NU">Niue</option>
              	<option value="NF">Norfolk Island</option>
              	<option value="MP">Northern Mariana Islands</option>
              	<option value="NO">Norway</option>
              	<option value="OM">Oman</option>
              	<option value="PK">Pakistan</option>
              	<option value="PW">Palau</option>
              	<option value="PS">Palestinian Territory, Occupied</option>
              	<option value="PA">Panama</option>
              	<option value="PG">Papua New Guinea</option>
              	<option value="PY">Paraguay</option>
              	<option value="PE">Peru</option>
              	<option value="PH">Philippines</option>
              	<option value="PN">Pitcairn</option>
              	<option value="PL">Poland</option>
              	<option value="PT">Portugal</option>
              	<option value="PR">Puerto Rico</option>
              	<option value="QA">Qatar</option>
              	<option value="RE">Réunion</option>
              	<option value="RO">Romania</option>
              	<option value="RU">Russian Federation</option>
              	<option value="RW">Rwanda</option>
              	<option value="BL">Saint Barthélemy</option>
              	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
              	<option value="KN">Saint Kitts and Nevis</option>
              	<option value="LC">Saint Lucia</option>
              	<option value="MF">Saint Martin (French part)</option>
              	<option value="PM">Saint Pierre and Miquelon</option>
              	<option value="VC">Saint Vincent and the Grenadines</option>
              	<option value="WS">Samoa</option>
              	<option value="SM">San Marino</option>
              	<option value="ST">Sao Tome and Principe</option>
              	<option value="SA">Saudi Arabia</option>
              	<option value="SN">Senegal</option>
              	<option value="RS">Serbia</option>
              	<option value="SC">Seychelles</option>
              	<option value="SL">Sierra Leone</option>
              	<option value="SG">Singapore</option>
              	<option value="SX">Sint Maarten (Dutch part)</option>
              	<option value="SK">Slovakia</option>
              	<option value="SI">Slovenia</option>
              	<option value="SB">Solomon Islands</option>
              	<option value="SO">Somalia</option>
              	<option value="ZA">South Africa</option>
              	<option value="GS">South Georgia and the South Sandwich Islands</option>
              	<option value="SS">South Sudan</option>
              	<option value="ES">Spain</option>
              	<option value="LK">Sri Lanka</option>
              	<option value="SD">Sudan</option>
              	<option value="SR">Suriname</option>
              	<option value="SJ">Svalbard and Jan Mayen</option>
              	<option value="SZ">Swaziland</option>
              	<option value="SE">Sweden</option>
              	<option value="CH">Switzerland</option>
              	<option value="SY">Syrian Arab Republic</option>
              	<option value="TW">Taiwan, Province of China</option>
              	<option value="TJ">Tajikistan</option>
              	<option value="TZ">Tanzania, United Republic of</option>
              	<option value="TH">Thailand</option>
              	<option value="TL">Timor-Leste</option>
              	<option value="TG">Togo</option>
              	<option value="TK">Tokelau</option>
              	<option value="TO">Tonga</option>
              	<option value="TT">Trinidad and Tobago</option>
              	<option value="TN">Tunisia</option>
              	<option value="TR">Turkey</option>
              	<option value="TM">Turkmenistan</option>
              	<option value="TC">Turks and Caicos Islands</option>
              	<option value="TV">Tuvalu</option>
              	<option value="UG">Uganda</option>
              	<option value="UA">Ukraine</option>
              	<option value="AE">United Arab Emirates</option>
              	<option value="GB">United Kingdom</option>
              	<option value="US">United States</option>
              	<option value="UM">United States Minor Outlying Islands</option>
              	<option value="UY">Uruguay</option>
              	<option value="UZ">Uzbekistan</option>
              	<option value="VU">Vanuatu</option>
              	<option value="VE">Venezuela, Bolivarian Republic of</option>
              	<option value="VN">Viet Nam</option>
              	<option value="VG">Virgin Islands, British</option>
              	<option value="VI">Virgin Islands, U.S.</option>
              	<option value="WF">Wallis and Futuna</option>
              	<option value="EH">Western Sahara</option>
              	<option value="YE">Yemen</option>
              	<option value="ZM">Zambia</option>
              	<option value="ZW">Zimbabwe</option>
              </select>
            </div>
          </div>

        </div>

        <div class="col-md-6">

          <?php /*
          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
              {!! Form::textarea('description', null, array('placeholder' => 'A short description','class' => 'form-control','id' => 'description', 'rows' => 2)) !!}
            </div>
          </div>
          */ ?>

          <div class="form-group">
            <div class="col-sm-12">
              <div id="map"></div>
            </div>
          </div>

          <div class="form-group">
            <label for="latitude" class="col-sm-2 control-label">Latitude</label>
            <div class="col-sm-10">
              {!! Form::text('latitude', null, array('placeholder' => '35.666216','class' => 'form-control','id' => 'latitude')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="longitude" class="col-sm-2 control-label">Longitude</label>
            <div class="col-sm-10">
              {!! Form::text('longitude', null, array('placeholder' => '139.704692','class' => 'form-control','id' => 'longitude')) !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Options</label>
            <div class="col-sm-10">
              <div class="checkbox">
                <label>
                  {{ Form::checkbox('has_nonsmoking', 1, false) }}
                  Non-smoking area
                </label>
              </div>
              <div class="checkbox">
                <label>
                  {{ Form::checkbox('has_vegetarian', 1, false) }}
                  Vegetarian menu
                </label>
              </div>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-lg">Create new burger</button>
                </div>
            </div>
          </div>
        </div>

      {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection

@section('mapscripts')
<script>

var map;
var markers = [];

var initMap = function() {
   var tokyo = {lat: 35.682956, lng: 139.753969};

   map = new google.maps.Map(document.getElementById('map'), {
     zoom: 12,
     center: tokyo,
     streetViewControl: false,
     mapTypeControl: false,
     clickableIcons: false
   });

   // This event listener will call addMarker() when the map is clicked.
   map.addListener('click', function(e) {
     addMarker(e.latLng);
     setLatLong(e.latLng.lat(), e.latLng.lng());
   });

   // Adds a marker at the center of the map.
   // addMarker(haightAshbury);
 }

  var addMarker = function(location) {
   deleteMarkers();
   var marker = new google.maps.Marker({
     position: location,
     map: map
   });
   markers.push(marker);
 }

  var setMapOnAll = function(map) {
   for (var i = 0; i < markers.length; i++) {
     markers[i].setMap(map);
   }
 }

var clearMarkers = function() {
   setMapOnAll(null);
 }

var showMarkers = function() {
   setMapOnAll(map);
 }

 var deleteMarkers = function() {
   clearMarkers();
   markers = [];
 }

var setLatLong = function(lat, lng) {
  var lat = parseFloat(lat.toFixed(6));
  var lng = parseFloat(lng.toFixed(6));
  $('#latitude').val(lat);
  $('#longitude').val(lng);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1KVyOd1wgik0a1CVTL1RHP1RCEAQpLdA&callback=initMap" async defer></script>
@endsection
