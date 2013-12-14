<?php

class Option extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'question_id' => 'required'
	);
	
	public function question()
	{
	    return $this->belongsTo('Question');
	}
}
