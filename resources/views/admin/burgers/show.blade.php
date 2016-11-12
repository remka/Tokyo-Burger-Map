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
        <li><a href="{{ route('admin.burgers') }}">Burgers</a></li>
        <li class="active">{{ $burger->name_en }}</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.burgers') }}"> Back</a>
      </div>

      <h1 class="page-header">{{ $burger->name_en }}</h1>

      <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
              <div class="col-sm-2">
                <strong>ID</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->id }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name (EN)</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->name_en }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name (JA)</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->name_ja }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name slug</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->name_slug }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Latitude</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->latitude }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Longitude</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->longitude }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Address 1</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->address_1 }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Address 2</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->address_2 }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Address 3</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->address_3 }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Municipality</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->municipality }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Prefecture</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->prefecture }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Postcode</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->postcode }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Country</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->country }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Non-smoking area</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->has_nonsmoking }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Vegetarian menu</strong>
              </div>
              <div class="col-sm-10">
                {{ $burger->has_vegetarian }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Added by</strong>
              </div>
              <div class="col-sm-10">
                <a href="{{ route('admin.users.show',$user->id) }}">{{ $user->name }}</a>
              </div>
            </div>

          </div>
      </div>


    </div>
  </div>
</div>
@endsection
