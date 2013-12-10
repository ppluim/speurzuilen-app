@extends('layouts.scaffold')

@section('main')

<h1>Show Option</h1>

<p>{{ link_to_route('options.index', 'Return to all options') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Correct?</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $option->title }}}</td>
			<td>{{{ $option->description }}}</td>
			<td>{{{ $option->correct }}}</td>
      <td>{{ link_to_route('options.edit', 'Edit', array($option->id), array('class' => 'btn btn-info')) }}</td>
      <td>
          {{ Form::open(array('method' => 'DELETE', 'route' => array('options.destroy', $option->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
          {{ Form::close() }}
      </td>
		</tr>
	</tbody>
</table>

@stop
