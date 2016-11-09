@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>Show user</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">

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
    <div class="col-md-2">
      YOOO
    </div>
  </div>

</div>
@endsection
