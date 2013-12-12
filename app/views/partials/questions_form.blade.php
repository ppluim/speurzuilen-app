<div class="form-group">
    {{ Form::label('page_id', 'Pagina', array('class'=>'col-sm-2 control-label')) }}
    <div class="col-sm-3">
        {{ Form::select('page_id', $pages, $data['page_id'], array('class'=>'form-control')) }}
    </div>
</div>
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

<div class="control-group">
    {{ Form::label('image', 'Image') }}
 
    <div class="fileupload fileupload-new" data-provides="fileupload">
        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;">
            @if (Page::find(1)->image)
                <a href="<?php echo $article->image; ?>"><img src="<?php echo Image::resize($article->image, 200, 150); ?>" alt=""></a>
            @else
                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
            @endif
        </div>
        <div>
            <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>{{ Form::file('image') }}</span>
            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">  
	  {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
    </div>
</div>

