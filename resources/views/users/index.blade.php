@extends('layouts.app')

@section('content')
<div class="container">

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="row">
    <div class="col-md-9">
      <h2>Show user</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-success btn-lg btn-block action-button" href="{{ route('users.create') }}"> Create new user</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">
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
              <a class="btn btn-primary btn-xs" href="{{ route('users.edit',$user->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
        	    {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $users->links() }}
    </div>
    <div class="col-md-3">
        @include('partials.managersidebar')
    </div>
  </div>

</div>
@endsection
