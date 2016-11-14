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
        <li class="active">Burgers</li>
      </ol>

      <div class="pull-right">
        <a class="btn btn-success" href="{{ route('admin.burgers.create') }}"> Create new burger</a>
      </div>

      <h1 class="page-header">Manage burgers</h1>

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
              <a class="btn btn-primary btn-xs" href="{{ route('admin.burgers.edit',$burger->id) }}">Edit</a>
              {!! Form::open(['method' => 'DELETE','route' => ['admin.burgers.destroy', $burger->id],'style'=>'display:inline','class'=>'deleteConfirm']) !!}
              {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
          	  {!! Form::close() !!}
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
      </div>

      <div class="text-center">
        {{ $burgers->links() }}
      </div>

    </div>
  </div>
</div>
@endsection

@section('utils')
<script src="/js/utils.js"></script>
@endsection
