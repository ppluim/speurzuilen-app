@extends('layouts.basic')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<div class="well">
			<legend>Please Login</legend>
			{{ Form::open(array('url' => 'login')) }}
			
			@if($errors->any())
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif

			{{ Form::text('email', '', array('placeholder' => 'Email')) }}<br>
			{{ Form::password('password', array('placeholder' => 'Password')) }}<br>
			{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
			{{ HTML::link('register', 'Register', array('type' => 'button', 'class' => 'btn btn-link')) }}
			{{ Form::close() }}

		</div>
	</div>
</div>

@stop