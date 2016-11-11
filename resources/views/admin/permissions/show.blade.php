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
        <li><a href="{{ route('admin.permissions') }}">Permissions</a></li>
        <li class="active">{{ $permission->display_name }}</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.permissions') }}"> Back</a>
      </div>

      <h1 class="page-header">{{ $permission->display_name }}</h1>


      <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
              <div class="col-sm-2">
                <strong>ID:</strong>
              </div>
              <div class="col-sm-10">
                {{ $permission->id }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name:</strong>
              </div>
              <div class="col-sm-10">
                {{ $permission->name }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Display name:</strong>
              </div>
              <div class="col-sm-10">
                {{ $permission->display_name }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Description:</strong>
              </div>
              <div class="col-sm-10">
                {{ $permission->description }}
              </div>
            </div>

          </div>
      </div>

    </div>
  </div>
</div>
@endsection
