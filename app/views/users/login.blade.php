@extends('layouts.basic')

@section('content')


	<div class="col-sm-4 col-sm-offset-4">
		<div class="well login-form">
			<legend>Please Login</legend>
			{{ Form::open(array('url' => 'login')) }}
			
			@if($errors->any())
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
			
		
				{{ Form::text('email', '', ['placeholder' => 'Email', 'class'=>'form-control']) }}<br>
				{{ Form::password('password', ['placeholder' => 'Password', 'class'=>'form-control']) }}<br>
				{{ Form::submit('Login', array('class' => 'btn btn-success')) }}
	
	
			{{ Form::close() }}

		</div>
	</div>

@stop