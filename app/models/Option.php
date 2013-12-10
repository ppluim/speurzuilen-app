<?php

class Option extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
	);
	
	public function question()
	{
	    return $this->belongsTo('Question');
	}
}
