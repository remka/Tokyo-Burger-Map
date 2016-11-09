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
      <h2>Create a new role</h2>
      </div>
      <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-10">
      <form class="form-horizontal">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Role name</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Role name">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Role display name</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Role display name">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Role description</label>
          <div class="col-sm-10">
            <textarea class="form-control" rows="3" placeholder="Role description"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Role permissions</label>
          <div class="col-sm-10">
            @foreach($permission as $value)
          	<div class="checkbox">
              <label>
                <input type="checkbox" value="">
                {{ $value->display_name }}
              </label>
            </div>
            @endforeach
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" class="btn btn-primary btn-lg">Create new role</button>
          </div>
        </div>

      </form>
    </div>
    <div class="col-md-2">
        YO
    </div>
  </div>
