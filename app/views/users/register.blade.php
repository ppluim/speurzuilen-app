@extends('layouts.basic')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<div class="well">
			<legend>Please Register</legend>
			{{ Form::open(array('url' => 'register')) }}
			
			@if($errors->any())
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
		
			{{ Form::text('username', '', array('placeholder' => 'Username')) }}<br>
			{{ Form::text('email', '', array('placeholder' => 'Email')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Password')) }}<br>
			{{ Form::submit('Register', array('type' => 'button', 'class' => 'btn btn-success')) }}
			{{ HTML::link('/', 'Cancel', array('type' => 'button', 'class' => 'btn btn-link')) }}
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop