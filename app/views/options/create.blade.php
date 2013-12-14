@extends('layouts.app')

@section('main')

<h1>Create Option for <span>question</span> {{ $question->title }} on <span>page</span> {{ $page->title }}</h1>

@include('options._form', ['submit_text'=>'submit', 'has_cancel'=>false, 'isModel'=>false])

@stop


