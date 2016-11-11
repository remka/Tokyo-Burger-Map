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
        <li class="active">Error</li>
      </ol>

      <h1 class="page-header">Permission not found</h1>

      <p>
        No permission found for this ID.<br />
        <a href="{{ route('admin.permissions') }}"> Go back</a>
      </p>

    </div>
  </div>
</div>
@endsection
