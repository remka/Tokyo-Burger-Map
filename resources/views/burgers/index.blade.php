@extends('layouts.app')

@section('content')
<div class="container">

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      @foreach ($burgers as $key => $burger)
        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="http://placehold.it/600x600">
            <div class="caption">
              <p>{{ $burger->name_en }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</div>
@endsection
