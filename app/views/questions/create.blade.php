@extends('layouts.app')

@section('main')

<h1>Create Question</h1>

{{ Form::open(
    array('route' => 'questions.store', 
        'class' => 'form-horizontal',
        'role'  => 'form'
    )
)}}

@include('partials.questions_form');

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


