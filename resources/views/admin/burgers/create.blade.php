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
            <label for="name_en" class="col-sm-2 control-label">Name (EN)</label>
            <div class="col-sm-10">
              {!! Form::text('name_en', null, array('placeholder' => 'Ex: THE GREAT BURGER','class' => 'form-control','id' => 'name_en')) !!}
            </div>
          </div>

          <div class="form-group">
            <label for="name_ja" class="col-sm-2 control-label">Name (JA)</label>
            <div class="col-sm-10">
              {!! Form::text('name_ja', null, array('placeholder' => 'Ex: ザ グレートバーガー','class' => 'form-control','id' => 'name_ja')) !!}
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
              {!! Form::text('country', null, array('placeholder' => 'JA','class' => 'form-control','id' => 'country','value' => 'JA','readonly' => 'readonly')) !!}
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
                  {{ Form::checkbox('has_nonsmoking') }}
                  Non-smoking area
                </label>
              </div>
              <div class="checkbox">
                <label>
                  {{ Form::checkbox('has_vegetarian') }}
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
