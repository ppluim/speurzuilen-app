@extends('layouts.app')

@section('main')

<h1>Edit Option</h1>

@include('options._form', ['submit_text'=>'update', 'has_cancel'=>true, 'isModel'=>true])

@stop
