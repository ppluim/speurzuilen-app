
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
	  {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
    </div>
</div>

