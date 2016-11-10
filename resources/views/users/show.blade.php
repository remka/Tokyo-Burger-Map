@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-md-9">
      <h2>Show user</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-default btn-lg btn-block action-button" href="{{ route('users.index') }}"> Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">

      <div class="row">
        <div class="col-sm-2">
          <strong>Name:</strong>
        </div>
        <div class="col-sm-10">
          {{ $user->name }}
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <strong>Email:</strong>
        </div>
        <div class="col-sm-10">
          <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <strong>Roles:</strong>
        </div>
        <div class="col-sm-10">
          @if(!empty($user->roles))
  					@foreach($user->roles as $role)
  						<label class="label label-success">{{ $role->display_name }}</label>
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
