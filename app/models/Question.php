<?php

class Question extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'page_id' => 'required'
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
