@extends('layouts.app')

@section('content')
<div class="container">

  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <div class="row">
    <div class="col-md-12">
      <h1 class="page-header">{{ $burger->name_en }}</h1>
    </div>
  </div>

</div>
@endsection
