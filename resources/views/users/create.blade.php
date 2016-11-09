@extends('layouts.app')

@section('content')
<div class="container">

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

  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
      <h2>Create a new user</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-10">
      <form class="form-horizontal" action="{{ route('users.create') }}" method="POST">

        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
        </div>

        <div class="form-group">
          <label for="confirm-password" class="col-sm-2 control-label">Confirm Password:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Password">
          </div>
        </div>

        <div class="form-group">
          <label for="roles" class="col-sm-2 control-label">Roles</label>
          <div class="col-sm-10">
            <select name="roles[]" id="roles" class="form-control" multiple="multiple">
              @foreach ($roles as $role)
              <option value="{{ $role->id }}">{{ $role->display_name }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="btn btn-primary btn-lg">Create new user</button>
          </div>
        </div>

        {{ csrf_field() }}

      </form>
    </div>
    <div class="col-md-2">
        YO
    </div>
  </div>
