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
    <div class="col-md-9">
      <h2>Create a new role</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-default btn-lg btn-block action-button" href="{{ route('roles.index') }}"> Back</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">

      {!! Form::open(array('route' => 'roles.store','method'=>'POST','class'=>'form-horizontal')) !!}

        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Role name</label>
          <div class="col-sm-10">
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','id' => 'name')) !!}
          </div>
        </div>

        <div class="form-group">
          <label for="display_name" class="col-sm-2 control-label">Role display name</label>
          <div class="col-sm-10">
            {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control','id' => 'display_name')) !!}
          </div>
        </div>

        <div class="form-group">
          <label for="description" class="col-sm-2 control-label">Role description</label>
          <div class="col-sm-10">
            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','rows'=>5,'id' => 'description')) !!}
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Role permissions</label>
          <div class="col-sm-10">
            @foreach($permission as $value)
          	<div class="checkbox">
              <label>
                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->display_name }}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="btn btn-primary btn-lg">Create new role</button>
          </div>
        </div>

      {!! Form::close() !!}

    </div>
    <div class="col-md-3">
        @include('partials.managersidebar')
    </div>
  </div>
