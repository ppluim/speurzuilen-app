@extends('layouts.app')

@section('main')

<h1>Create Page</h1>

@include('partials.pages_errors')

<div class="well">
{{ Form::open(array('route' => 'pages.store')) }}
	<ul>
        
        @include('partials.pages_form')

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}
</div>

@stop


