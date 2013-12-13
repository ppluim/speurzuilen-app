@extends('layouts.app')

@section('main')

<h1>Edit Option</h1>
{{ Form::model($option, array('method' => 'PATCH', 'route' => array('pages.questions.options.update', $option->question->page_id, $option->question_id, $option->id))) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('correct', 'Correct:') }}
            {{ Form::checkbox('correct') }}
        </li>

        <li>
            {{ Form::label('question_id', 'question ID') }}
            {{ Form::text('question_id') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('pages.edit', 'Cancel', $page_id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
