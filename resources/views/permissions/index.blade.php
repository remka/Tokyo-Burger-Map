@extends('layouts.app')

@section('content')
<div class="container">

  @if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif

  <div class="row">
    <div class="col-md-9">
      <h2>Permissions management</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-success btn-lg btn-block action-button" href="{{ route('permissions.create') }}"> Create new permission</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">
      YO
    </div>
    <div class="col-md-3">
        @include('partials.managersidebar')
    </div>
  </div>

</div>
@endsection
