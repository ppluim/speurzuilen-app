<li>
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title') }}
</li>

<li>
    {{ Form::label('color', 'Color:') }}
    {{ Form::select('color', Page::$colors)}}
</li>

<li>
    {{ Form::label('wander_tour_text', 'Wander_tour_text:') }}
    {{ Form::textarea('wander_tour_text') }}
</li>

<li>
    {{ Form::label('wander_main_text', 'Wander_main_text:') }}
    {{ Form::textarea('wander_main_text') }}
</li>
