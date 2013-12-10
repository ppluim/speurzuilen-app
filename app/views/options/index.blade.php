@extends('layouts.app')

@section('main')

<h1>All Options</h1>

<p>{{ link_to_route('options.create', 'Add new option') }}</p>

@if ($options->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Correct?</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($options as $option)
				<tr>
					<td>{{{ $option->title }}}</td>
					<td>{{{ $option->description }}}</td>
 					<td>{{{ $option->correct }}}</td>

          
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no options
@endif

@stop
