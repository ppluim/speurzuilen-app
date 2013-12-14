@if($isModel)

	{{ Form::model($question,
		[
			'method' => 'PATCH', 
	    'route' => ['pages.questions.update', $question->page_id, $question->id], 
	    'class' => 'form-horizontal',
	    'role'  => 'form'
	  ]
	)}}

@else

	{{ Form::open([
			'route' => ['pages.questions.store','pages'=>$page->id], 
	    'class' => 'form-horizontal',
	    'role'  => 'form'
	])}}

@endif

<div class="form-group">
    {{ Form::label('title', 'Titel',  array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6">
        {{ Form::text('title', null, array('class'=>'form-control')) }}            
    </div>
</div>
			 
<div class="form-group">
    {{ Form::label('description', 'Inleidende tekst', array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-6">
        {{ Form::textarea('description', null, array('class'=>'form-control')) }}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">  

		  {{ Form::submit(ucwords($submit_text), array('class' => 'btn btn-info')) }}
		  @if($has_cancel)
	      {{ link_to_route('pages.edit', 'Cancel', $page->id, array('class' => 'btn')) }}
	    @endif

    </div>
</div>

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
