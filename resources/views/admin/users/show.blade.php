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
        <li class="active">{{ $user->name }}</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-default" href="{{ route('admin.users') }}"> Back</a>
      </div>

      <h1 class="page-header">User: {{ $user->name }}</h1>


      <div class="panel panel-default">
        <div class="panel-body">

            <div class="row">
              <div class="col-sm-2">
                <strong>ID:</strong>
              </div>
              <div class="col-sm-10">
                {{ $user->id }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Name:</strong>
              </div>
              <div class="col-sm-10">
                {{ $user->name }}
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Email:</strong>
              </div>
              <div class="col-sm-10">
                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-2">
                <strong>Roles:</strong>
              </div>
              <div class="col-sm-10">
                @if(!empty($user->roles))
        					@foreach($user->roles as $role)
        						<label class="label label-success">{{ $role->display_name }}</label>
        					@endforeach
      				  @endif
              </div>
            </div>

          </div>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:5%;">#</th>
              <th style="width:35%;">Name (EN)</th>
              <th style="width:35%;" class="hidden-xs">Name (JA)</th>
              <th style="width:25%;">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($burgers as $key => $burger)
          <tr>
            <td>{{ $burger->id }}</td>
            <td>{{ $burger->name_en }}</td>
            <td class="hidden-xs">{{ $burger->name_ja }}</td>
            <td>
              <a class="btn btn-info btn-xs" href="{{ route('admin.burgers.show',$burger->id) }}">Show</a>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>



    </div>
  </div>
</div>
@endsection
