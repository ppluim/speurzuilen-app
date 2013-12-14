@extends('layouts.app')

@section('main')

<h1>Create Page</h1>

@include('partials.pages_errors')

<div class="well">
	@include('pages._form', ['submitText'=>'create page', 'hasCancel'=>false, 'isModel'=>false])
</div>

@stop


