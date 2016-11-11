@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
		<div class="text-center">
	    <h1>Page Not Found</h1>
			<p>
				The page you requested could not be found, either contact your webmaster or try again.<br />
				Use your browsers <b>Back</b> button to navigate to the page you have prevously come from.
			</p>
			<p><a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">Take me home</a></p>
		</div>
  </div>
</div>
@endsection
