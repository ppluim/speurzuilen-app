@extends('layouts.app')

@section('main')

<h1>Edit Page</h1>
{{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('color', 'Color:') }}
            {{ Form::select('color', Page::$colors)}}
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
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('pages.show', 'Cancel', $page->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
