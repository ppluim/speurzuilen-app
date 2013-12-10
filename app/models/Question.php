<?php

class Question extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required'
	);
	
	public function page()
	{
	    return $this->belongsTo('Page');
	}

	public function options()
	{
	    return $this->hasMany('Option');
	}
}
