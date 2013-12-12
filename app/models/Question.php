<?php

class Question extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'page_id' => 'required'
	);

	public static $errors;
	
	public function page()
	{
	    return $this->belongsTo('Page');
	}

	public function options()
	{
	    return $this->hasMany('Option');
	}

	public function isValid($data)
	{
		$validation = Validator::make($data, static::$rules);

		if( $validation->passes()) return true;

		static::$errors = $validation->messages();
		return false;
	}
}
