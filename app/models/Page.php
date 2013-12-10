<?php

class Page extends Eloquent {
	protected $guarded = array();

	public static $colors = array(
		'purple'=>'purple',
		'yellow'=>'yellow', 
		'blue'=>'blue'
	);

	public static $rules = array(
		'title' => 'required',
		'color' => 'required',
		'wander_tour_text' => 'required',
		'wander_main_text' => 'required'
	);

	public function questions()
	{
	  return $this->hasMany('Question');
	}

	public function getQuestionsAmount() {
		return $this->questions->count();
	}

}
