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

			<div class="question well clearfix">
				<div class="actions pull-right">
					<span class="actions__edit">
						{{ link_to_route('pages.questions.edit', 'Edit', [$question->page_id, $question->id], ['class' => 'btn btn-info']) }}
					</span>
					<span class="actions__delete">						
						{{ Form::open(['method'=>'DELETE','action'=>['QuestionsController@destroy',$question->page_id,$question->id]])}}
						{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
						{{ Form::close() }}
					</span>
				</div>
				<h4>{{ $question->title }}</h4>
			</div>
		
		<h3>Options</h3>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Title</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($question->options as $option)
					<tr>					
						<td>{{ $option->title }}</td>
						<td>
							{{ link_to_route(
								'pages.questions.options.edit', 
								'Edit', 
								[$page->id, $option->question_id, $option->id], 
								['class' => 'btn btn-info']
							) }}
						</td>
	      		{{ Form::open([
	      			'method'=>'DELETE',
	      			'action'=>
	      			['OptionsController@destroy',$page->id,$option->question_id,$option->id]
	      		])}}
	      		<td>
	      			{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
	      		</td>
						{{ Form::close() }}
					</tr>
				@endforeach
			</tbody>
		</table>

	@endforeach
@else
	There are no questions
@endif
{{ link_to_route('pages.questions.create', 'Add new question', $page->id, ['class'=>'btn btn-primary']) }}

@stop
