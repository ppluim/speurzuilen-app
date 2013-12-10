@extends('layouts.app')

@section('main')

<h1>Edit Question</h1>

{{ Form::model($question, array(
        'method' => 'PATCH', 
        'route' => array('questions.update', $question->id), 
        'class' => 'form-horizontal',
        'role'  => 'form'
    ))   
}}

    <div class="form-group">
        {{ Form::label('page_id', 'Pagina', array('class'=>'col-sm-2 control-label')) }}
        <div class="col-sm-3">
            {{ Form::select('page_id', $pages, null, array('class'=>'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Titel',  array('class'=>'col-sm-2 control-label')) }}
        <div class="col-sm-6">
            {{ Form::text('title', null, array('class'=>'form-control')) }}            
        </div>
    </div>
				 
    <div class="form-group">
        {{ Form::label('description', 'Inleidende tekst', array('class'=>'col-sm-2 control-label')) }}
        <div class="col-sm-6">
            {{ Form::textarea('description', null, array('class'=>'form-control')) }}
        </div>
    </div>

	<div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">  
		  {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
        </div>
	</div>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
