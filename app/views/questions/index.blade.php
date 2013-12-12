@extends('layouts.app')

@section('main')

<h1>All Questions</h1>

<p>{{ link_to_route('pages.questions.create', 'Add new question', $page_id) }}</p>

@if ($questions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Page</th>
				<th>Title</th>
				<th>Description</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($questions as $question)
				<tr>
					<td>{{{ $question->page->title }}}</td>
					<td>{{{ $question->title }}}</td>
					<td>{{{ $question->description }}}</td>
          <td>{{ link_to_route('pages.questions.edit', 'Edit', array($question->page_id, $question->id), array('class' => 'btn btn-info')) }}</td>
          
          {{ Form::open(['method'=>'DELETE','action'=>['QuestionsController@destroy',$question->page_id,$question->id]])}}
          <td>
          	{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
          </td>
					{{ Form::close() }}
         
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no questions
@endif

@stop
