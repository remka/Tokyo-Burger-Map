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
        <li class="active">Permissions</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('admin.permissions.create') }}"> Create new permission</a>
      </div>

      <h1 class="page-header">Manage permissions</h1>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:5%;">#</th>
              <th style="width:20%;">Name</th>
              <th style="width:55%;" class="hidden-xs">Description</th>
              <th style="width:20%;">Actions</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($permissions as $key => $permission)
          <tr>
            <td>{{ $permission->id }}</td>
            <td>{{ $permission->display_name }}</td>
            <td class="hidden-xs">{{ $permission->description }}</td>
            <td>
              <a class="btn btn-info btn-xs" href="{{ route('admin.permissions.show',$permission->id) }}">Show</a>
              <a class="btn btn-primary btn-xs" href="{{ route('admin.permissions.edit',$permission->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['admin.permissions.destroy', $permission->id],'style'=>'display:inline','class'=>'deleteConfirm']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
          	  {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>

      <div class="text-center">
        {{ $permissions->links() }}
      </div>

    </div>
  </div>
</div>
@endsection

@section('utils')
<script src="/js/utils.js"></script>
@endsection
