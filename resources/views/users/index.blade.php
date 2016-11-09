@extends('layouts.app')

@section('content')
<div class="container">

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
      <h2>Users management</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('users.create') }}"> Create new user</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
      			<th>Name</th>
      			<th>Email</th>
      			<th>Roles</th>
      			<th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $key => $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
            <td>xxx</td>
            <td>
              xxx
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-2">
        YO
    </div>
  </div>

</div>
@endsection
