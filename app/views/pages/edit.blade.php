@extends('layouts.app')

@section('main')

<h1>Edit Page</h1>

@include('partials.pages_errors')

<div class="well">
	@include('pages._form', ['submitText'=>'update page', 'hasCancel'=>true, 'isModel'=>true])
</div>

<hr />

<h2>Quizvraag</h2>
@if ($page->questions->count())
		@foreach ($page->questions as $question)

			<p>{{ link_to_route('pages.questions.create', 'Add new question', $page->id, ['class'=>'btn btn-default']) }}</p>
			<div class="question well clearfix">

				@include('partials.admin._actions', ['editRoute'=>'pages.questions.edit', 'editData'=>[$question->page_id, $question->id], 'deleteAction'=>['QuestionsController@destroy',$question->page_id,$question->id]])
				<h4>{{ $question->title }}</h4>
			</div>
		
		<h3>Options</h3>
		<p>{{ link_to_route('pages.questions.options.create', 'Add option', [$page->id, $question->page_id], ['class'=>'btn btn-default']) }}</p>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody>
				@foreach ($question->options as $option)
					<tr>					
						<td>{{ $option->title }}</td>
						<td>{{ $option->description }}</td>
						<td>
							@include('partials.admin._actions', ['editRoute'=>'pages.questions.options.edit', 'editData'=>[$page->id, $option->question_id, $option->id], 'deleteAction'=>['OptionsController@destroy',$page->id,$option->question_id,$option->id]])
	      		</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	@endforeach
@else
	There are no questions
@endif

@stop
