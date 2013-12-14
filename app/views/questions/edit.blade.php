@extends('layouts.app')

@section('main')

<h1>Edit Question</h1> 

@include('questions._form', ['submit_text'=>'update', 'has_cancel'=>true, 'isModel'=>true])

@stop
