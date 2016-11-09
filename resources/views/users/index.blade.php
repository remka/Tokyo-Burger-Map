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
              <a class="btn btn-primary btn-xs" href="#">Edit</a>
              <a class="btn btn-danger btn-xs" href="#">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $users->links() }}
    </div>
    <div class="col-md-2">
        YO
    </div>
  </div>

</div>
@endsection
