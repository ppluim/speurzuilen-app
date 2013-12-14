<?php

class Page extends Eloquent {
	protected $guarded = array();

	// Static Properties
	// -----------------
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

	public static $errors;

	// Relationships
	// -------------
	public function questions()
	{
	  return $this->hasMany('Question');
	}

	 public function options()
    {
        return $this->hasManyThrough('Option', 'Question');
    }

  // Methods
  // -------
  public function delete()
  {
    // delete all related questions 
    foreach($this->questions as $question)
    {
      $question->delete();
    }

    // delete the page
    return parent::delete();
  }

	public function getQuestionsAmount() {
		return $this->questions->count();
	}

	public function isValid($data) {
		$validation = Validator::make($data, static::$rules);

		if( $validation->passes()) return true;

		static::$errors = $validation->messages();
		return false;
	}

}
