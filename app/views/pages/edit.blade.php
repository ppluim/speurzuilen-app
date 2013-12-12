@extends('layouts.app')

@section('main')

<h1>Edit Page</h1>

@include('partials.pages_errors')

{{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id))) }}
	<ul>
        
        @include('partials.pages_form')

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('pages.show', 'Cancel', $page->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif


{{ Form::open([
		'route' => ['pages.questions.store',$page->id], 
    'class' => 'form-horizontal',
    'role'  => 'form'
])}}


{{ Form::close() }}
<hr />
@if ($page->questions->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Page</th>
				<th>Title</th>
				<th>Description</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($page->questions as $question)
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
