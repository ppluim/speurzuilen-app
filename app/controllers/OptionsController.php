<?php

class OptionsController extends BaseController {

	/**
	 * Option Repository
	 *
	 * @var Option
	 */
	protected $option;

	public function __construct(Option $option)
	{
		$this->option = $option;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$options = $this->option->all();

		return View::make('options.index', compact('options'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($page_id, $question_id)
	{
		return View::make('options.create', compact('page_id', 'question_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Option::$rules);

		if ($validation->passes())
		{
			$this->option->create($input);

			return Redirect::route('options.index');
		}

		return Redirect::route('options.create')
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
	public function show($id)
	{
		$option = $this->option->findOrFail($id);

		return View::make('options.show', compact('option'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($page_id, $question_id, $id)
	{
		$option = $this->option->find($id);

		if (is_null($option))
		{
			return Redirect::route('pages.edit', $page_id);
		}

		return View::make('options.edit', compact('option', 'page_id', 'question_id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($page_id, $question_id, $id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Option::$rules);

		if ($validation->passes())
		{
			$option = $this->option->find($id);
			$option->update($input);

			return Redirect::route('pages.edit', $page_id);
		}

		return Redirect::route('options.edit', $id)
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
	public function destroy($page_id, $question_id, $id)
	{
		$this->option->find($id)->delete();

		return Redirect::route('pages.edit', $page_id)
			->with('message', 'Option is succesfully destroyed');
	}

}
