@extends('layouts.basic')

@section('content')

<h1>Hello, {{ ucwords(Auth::user()->username) }}</h1>

@stop