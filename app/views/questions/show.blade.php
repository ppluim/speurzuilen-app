@extends('layouts.app')

@section('main')

<h1>Show Question</h1>

<p>{{ link_to_route('questions.index','Return to all questions') }}</p>


<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
				<th>Description</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $question->title }}}</td>
					<td>{{{ $question->description }}}</td>
          <td>{{ link_to_route('questions.edit', 'Edit', $question->id, array('class' => 'btn btn-info')) }}</td>
          <td>
            {{ Form::open(array(
            	'method' => 'DELETE', 
            	'route' => array('questions.destroy', $question->id)
            	)) }}
                {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
          </td>
		</tr>
	</tbody>
</table>

@stop
