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
        <li><a href="{{ route('admin.users') }}">Users</a></li>
        <li class="active">Edit an user</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.users') }}"> Back</a>
      </div>

      <h1 class="page-header">Edit a role</h1>

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

      <div class="panel panel-default">
        <div class="panel-body">

          {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id], 'class'=>'form-horizontal']) !!}

            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'name')) !!}
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'id' => 'email')) !!}
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control', 'id' => 'password')) !!}
              </div>
            </div>

            <div class="form-group">
              <label for="confirm-password" class="col-sm-2 control-label">Confirm Password:</label>
              <div class="col-sm-10">
                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'id' => 'confirm-password')) !!}
              </div>
            </div>

            <div class="form-group">
              <label for="roles" class="col-sm-2 control-label">Roles</label>
              <div class="col-sm-10">
                {!! Form::select('roles[]', $roles, $userRoles, array('class' => 'form-control','multiple')) !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8 col-sm-offset-2">
                <button type="submit" class="btn btn-primary btn-lg">Edit user</button>
              </div>
            </div>

          {!! Form::close() !!}

        </div>
      </div>

    </div>
  </div>
</div>
@endsection
