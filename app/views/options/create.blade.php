@extends('layouts.app')

@section('main')

<h1>Create Option for <span>question</span> {{ $question->title }} on <span>page</span> {{ $page->title }}</h1>

{{ Form::open(array(
    'route' => [
        'pages.questions.options.store', 
        'pages'=>$page->id, 
        'questions'=>$question->id
    ],
    'class' => 'form-horizontal',
    'role'  => 'form'
)) }}
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
            {{ Form::label('correct?', 'Correct?:') }}
            {{ Form::checkbox('correct?') }}
        </li>

        <li>
            {{ Form::label('belongs_to', 'Belongs_to:') }}
            {{ Form::text('belongs_to') }}
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


