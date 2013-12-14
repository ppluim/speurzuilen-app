@extends('layouts.app')

@section('main')

<h1>Create Question for {{ $page->title }}</h1>

@include('questions._form', ['submit_text'=>'create', 'has_cancel'=>false, 'isModel'=>false])

@stop


