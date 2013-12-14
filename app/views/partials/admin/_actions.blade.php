<div class="actions pull-right">
	<span class="actions__edit">
	{{ link_to_route(

	$editRoute, 

	'Edit', 

	$editData, 

	['class' => 'btn btn-info']
) }}
	</span>
	<span class="actions__delete">						
		{{ Form::open([
			'method'=>'DELETE',
			'action'=>$deleteAction

		])}}
		{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
		{{ Form::close() }}
	</span>
</div>