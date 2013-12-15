@extends('layouts.basic')

@section('head')
	{{ $bodyClass = "login" }}
@stop


@section('content')

	<div class="flexbox flexbox--parent">
		<div class="flexbox__child well login-form">
			<legend>Sesam open U</legend>
			{{ Form::open(array('url' => 'login')) }}
			
			@if($errors->any())
			<div class="alert alert-danger">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{ implode('', $errors->all('<li class="error">:message</li>')) }}
			</div>
			@endif
			
			{{ Form::text('email', '', ['placeholder' => 'Email', 'class'=>'form-control']) }}<br>
			{{ Form::password('password', ['placeholder' => 'Password', 'class'=>'form-control']) }}<br>
			
			{{ Form::submit('Inloggen', array('class' => 'btn btn-lrg btn-primary')) }}
	
	
			{{ Form::close() }}

		</div>
	</div>
@stop