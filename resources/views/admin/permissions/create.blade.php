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
        <li><a href="{{ route('admin.permissions') }}">Permissions</a></li>
        <li class="active">Create permission</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.permissions') }}"> Back</a>
      </div>

      <h1 class="page-header">Create a permission</h1>

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

      {!! Form::open(array('route' => 'admin.permissions.store','method'=>'POST','class' => 'form-horizontal')) !!}

      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Permission name</label>
        <div class="col-sm-10">
          {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','id' => 'name')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="display_name" class="col-sm-2 control-label">Permission display name</label>
        <div class="col-sm-10">
          {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control','id' => 'display_name')) !!}
        </div>
      </div>

      <div class="form-group">
        <label for="description" class="col-sm-2 control-label">Permission description</label>
        <div class="col-sm-10">
          {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','rows'=>5,'id' => 'description')) !!}
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-2">
          <button type="submit" class="btn btn-primary btn-lg">Create new permission</button>
        </div>
      </div>

      {!! Form::close() !!}

    </div>
  </div>
</div>
@endsection
