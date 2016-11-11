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
        <li><a href="{{ route('admin.roles') }}">Roles</a></li>
        <li class="active">{{ $role->display_name }}</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.roles') }}"> Back</a>
      </div>

      <h1 class="page-header">Role: {{ $role->display_name }}</h1>


      <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
              <div class="col-sm-2">
                <strong>ID:</strong>
              </div>
              <div class="col-sm-10">
                {{ $role->id }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name:</strong>
              </div>
              <div class="col-sm-10">
                {{ $role->name }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Display name:</strong>
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

          </div>
      </div>

    </div>
  </div>
</div>
@endsection
