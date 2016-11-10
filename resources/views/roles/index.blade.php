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
      <h2>Role Management</h2>
    </div>
    <div class="col-md-3">
      <a class="btn btn-success btn-lg btn-block action-button" href="{{ route('roles.create') }}"> Create new role</a>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
        </thead>
      <tbody>
        @foreach ($roles as $key => $role)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $role->display_name }}</td>
          <td>{{ $role->description }}</td>
          <td>
            <a class="btn btn-info btn-xs" href="{{ route('roles.show',$role->id) }}">Show</a>
            <a class="btn btn-primary btn-xs" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
        	  {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
      </table>
      {{ $roles->links() }}
    </div>
    <div class="col-md-3">
        @include('partials.managersidebar')
    </div>
  </div>

</div>
@endsection
