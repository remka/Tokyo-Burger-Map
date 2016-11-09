@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h2>Role Management</h2>
                </div>
                <div class="panel-body">
                @foreach ($roles as $key => $role)
                  {{ $role->display_name }}
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-2">
            YO
        </div>
    </div>
</div>
@endsection
