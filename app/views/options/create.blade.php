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

<div class="form-group">
    {{ Form::label('title', 'Titel',  ['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-6">
        {{ Form::text('title', null, ['class'=>'form-control']) }}            
    </div>
</div>

<div class="form-group">
    {{ Form::label('description', 'Description',  ['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-6">
        {{ Form::textarea   ('description', null, ['class'=>'form-control']) }}            
    </div>
</div>

<div class="form-group">
    {{ Form::label('correct?', 'Correct answer?',  ['class'=>'col-sm-2 control-label']) }}
    <div class="col-sm-6">
        {{ Form::checkbox('correct', null, ['class'=>'form-control']) }}            
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
		{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
    </div>
</div>

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


