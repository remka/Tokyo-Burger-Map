@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-9">
      <h2>Show a role</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-default btn-lg btn-block action-button" href="{{ route('roles.index') }}"> Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">

      <div class="row">
        <div class="col-sm-2">
          <strong>Name:</strong>
        </div>
        <div class="col-sm-10">
          {{ $role->display_name }}
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <strong>Description:</strong>
        </div>
        <div class="col-sm-10">
          {{ $role->description }}
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <strong>Permissions:</strong>
        </div>
        <div class="col-sm-10">
          @if(!empty($rolePermissions))
  					@foreach($rolePermissions as $v)
  						<label class="label label-success">{{ $v->display_name }}</label>
  					@endforeach
				  @endif
        </div>
      </div>

    </div>
    <div class="col-md-3">
      @include('partials.managersidebar')
    </div>
  </div>

</div>
@endsection
