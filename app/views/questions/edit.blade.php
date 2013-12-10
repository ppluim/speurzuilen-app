@extends('layouts.app')

@section('main')

<h1>Edit Question</h1>

{{ Form::model($question, array('method' => 'PATCH', 'route' => array('questions.update', $question->id))) }}

	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>
				 <li>
            {{ Form::label('page_id', 'Page ID') }}
            {{ Form::select('page_id', $pages) }}
        </li>
        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
