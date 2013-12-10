@extends('layouts.app')

@section('main')

<h1>Create Page</h1>

{{ Form::open(array('route' => 'pages.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('color', 'Color:') }}
            {{ Form::select('color', Page::$colors) }}
        </li>

        <li>
            {{ Form::label('wander_tour_text', 'Wander_tour_text:') }}
            {{ Form::textarea('wander_tour_text') }}
        </li>

        <li>
            {{ Form::label('wander_main_text', 'Wander_main_text:') }}
            {{ Form::textarea('wander_main_text') }}
        </li>

		<li>
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


