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
        <li><a href="{{ route('admin.roles') }}">Roles</a></li>
        <li class="active">Create role</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.roles') }}"> Back</a>
      </div>

      <h1 class="page-header">Create a role</h1>

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

          {!! Form::open(array('route' => 'admin.roles.store','method'=>'POST','class'=>'form-horizontal')) !!}

            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Role name</label>
              <div class="col-sm-10">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','id' => 'name')) !!}
                <span id="helpBlock" class="help-block">Use lower case and dashes instead of spaces <code>my-name</code> instead of <code>My Name</code>.</span>
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
      </div>

    </div>
  </div>
</div>
@endsection
