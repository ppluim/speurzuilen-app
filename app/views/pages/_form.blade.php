@section('head_script')
  <script type="text/javascript">
    $(document).ready(
      function()
      {
        $('.redactor').redactor();
      }
    );
  </script>
@stop

@if($isModel)
	{{ Form::model($page, [
		'method' => 'PATCH', 
		'route' => ['pages.update', $page->id ],
		'class' => 'form-horizontal',
    'role'  => 'form'
	]) }}
@else
	{{ Form::open(['route'=>['pages.store'], 'class'=>'form-horizontal', 'role'=>'form']) }}
@endif

<div class="form-group">
  {{ Form::label('title', 'Titel',  ['class'=>'col-sm-2 control-label']) }}
  <div class="col-sm-6">
      {{ Form::text('title', null, ['class'=>'form-control']) }}            
  </div>
</div>

<div class="form-group">
  {{ Form::label('color', 'Color',  ['class'=>'col-sm-2 control-label']) }}
  <div class="col-sm-6">
      {{ Form::select('color', Page::$colors, ['class'=>'form-control']) }}            
  </div>
</div>

<div class="form-group">
  {{ Form::label('wander_main_text', 'Wandeltocht tekst',  ['class'=>'col-sm-2 control-label']) }}
  <div class="col-sm-6">
      {{ Form::textarea('wander_main_text', null, ['id'=>'redactor_content1', 'class'=>'redactor form-control']) }}            
  </div>
</div>

<div class="form-group">
  {{ Form::label('wander_tour_text', 'Tour tekst',  ['class'=>'col-sm-2 control-label']) }}
  <div class="col-sm-6">
      {{ Form::textarea('wander_tour_text', null, ['id'=>'redactor_content2', 'class'=>'redactor form-control']) }}            
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-6">
		{{ Form::submit( $submitText, array('class' => 'btn btn-info')) }}
		@if($hasCancel)
			{{ link_to_route('pages.show', 'Cancel', $page->id, array('class' => 'btn')) }}
		@endif
  </div>
</div>

{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

