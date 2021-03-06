@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row">

    <div class="col-sm-3 col-md-2 sidebar">
      @include('partials.adminsidebar')
    </div>

    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

      <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.users') }}">Users</a></li>
        <li class="active">Create an user</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.users') }}"> Back</a>
      </div>

      <h1 class="page-header">Create an user</h1>

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

      {!! Form::open(array('route' => 'admin.users.store','method'=>'POST','class' => 'form-horizontal')) !!}

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
          {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','id' => 'name')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          {!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control','id' => 'email')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control','id' => 'password')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="confirm-password" class="col-sm-2 control-label">Confirm Password:</label>
        <div class="col-sm-10">
          {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control','id' => 'confirm-password')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="roles" class="col-sm-2 control-label">Roles</label>
        <div class="col-sm-10">
          {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-2">
          <button type="submit" class="btn btn-primary btn-lg">Create new user</button>
        </div>
      </div>

      {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
