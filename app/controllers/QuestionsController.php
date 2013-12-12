<?php

class QuestionsController extends BaseController {

	/**
	 * Question Repository
	 *
	 * @var Question
	 */
	protected $question;

	public function __construct(Question $question)
	{
		$this->question = $question;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($page_id)
	{
		$questions = $this->question->with('page')->get();
		return View::make('questions.index', compact('questions', 'page_id'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($page_id)
	{
		// $page = $page_id;
		$page = Page::findOrFail($page_id);

		return View::make('questions.create')
			->with('page', $page);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($page_id)
	{
		$input = Input::all();
		$input['page_id'] = $page_id;

		if($this->question->isValid($input))
		{
			$this->question->create($input);

			return Redirect::route('pages.show', $page_id)
				->with('message', 'Question succesfully created');
		}

		return Redirect::route('pages.questions.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($page_id, $id)
	{
		$question = $this->question->findOrFail($id);

		return View::make('questions.show', compact('question', 'page_id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($page_id, $id)
	{
		$question = $this->question->find($id);

		if (is_null($question))
		{
			return Redirect::route('pages.questions.index')
				->with('page_id', $page_id)
				->with('error', 'There is no such question');
		}
		
		return View::make('questions.edit')
			->with('question',	$question)
			->with('page_id', 		$page_id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($page_id, $id)
	{
		$input = array_except(Input::all(), '_method');
		$input['page_id'] = $page_id;

		if ( $this->question->isValid($input) )
		{
			$question = $this->question->find($id);
			$question->update($input);
			
			return Redirect::route('pages.edit', $id)
				->with('message', 'Question is succesfully updated!');
		}

		return Redirect::route('pages.questions.edit', [$page_id, $id])
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($page_id, $id)
	{
		$this->question->find($id)->delete();

		return Redirect::back()
			->with('page_id', $page_id)
			->with('message', 'Questions was succesfully destroyed');
	}
}
