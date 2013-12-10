@extends('layouts.app')

@section('header')
<header {{ "class='page-title ".$page->color."'"  }}>
		<h1>
			<span class="page-number pull-right">{{{ $page->id }}}</span> 
			{{{ $page->title }}}
		</h1>
</header>
@stop

@section('main')

<section class="tour">
	<h2 class='tour__header'>Wandeling</h2>
	<div class="tour__main-text">
		<p>{{{ $page->wander_main_text }}}<p>
	</div>
	<div class="tour__tour-text">
		<p>{{{ $page->wander_tour_text }}}<p>
	</div>
</section>

@if($page->getQuestionsAmount() > 0)
	<section class="quiz">
		<h2 class="quiz__header">Speurtocht</h2>
		<p class='quiz_description'>{{ $question->description }}</p>
		<div class="quiz__question">
			<h3 class="quiz__title">{{{ $question->title }}}</h3>
			<ol class="quiz__options" type='A'>
				@foreach ($options as $option)
					<li>{{{ $option->title }}}</li>
				@endforeach
			</ol>
		</div>

		@if(Auth::check())
			<div class="alert alert-notice">logged in</div>
		@endif
	</section>
@endif

@stop
