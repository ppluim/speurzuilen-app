@extends('layouts.app')

@section('main')

<h1>Edit Question</h1>

{{ Form::model($question, array(
        'method' => 'PATCH', 
        'route' => array('pages.questions.update', $question->page_id, $question->id), 
        'class' => 'form-horizontal',
        'role'  => 'form'
    ))   
}}
    
@include('partials.questions_form');

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
