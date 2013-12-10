@extends('layouts.app')

@section('main')

<h1>All Pages</h1>

<p>{{ link_to_route('pages.create', 'Add new page') }}</p>

@if ($pages->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Title</th>
				<th>Color</th>
				<th>Wander_tour_text</th>
				<th>Wander_main_text</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($pages as $page)
				<tr>
					<td>{{{ $page->title }}}</td>
					<td>{{{ $page->color }}}</td>
					<td>{{{ $page->wander_tour_text }}}</td>
					<td>{{{ $page->wander_main_text }}}</td>
                    <td>{{ link_to_route('pages.edit', 'Edit', array($page->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('pages.destroy', $page->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no pages
@endif

@stop
