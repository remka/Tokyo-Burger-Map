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
        <li class="active">Users</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('admin.users.create') }}"> Create new user</a>
      </div>

      <h1 class="page-header">Manage users</h1>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width:5%;">#</th>
              <th style="width:20%;">Name</th>
              <th style="width:20%;">Email</th>
              <th style="width:35%;">Roles</th>
              <th style="width:20%;">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
              <td>
                @if(!empty($user->roles))
          				@foreach($user->roles as $v)
          					<label class="label label-success">{{ $v->display_name }}</label>
          				@endforeach
          			@endif
              </td>
              <td>
                <a class="btn btn-info btn-xs" href="{{ route('users.show',$user->id) }}">Show</a>
                <a class="btn btn-primary btn-xs" href="{{ route('users.edit',$user->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
          	    {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        <div class="text-center">
          {{ $users->links() }}
        </div>

      </div>

    </div>
  </div>
</div>
@endsection
