<?php

class PagesController extends BaseController {

	/**
	 * Page Repository
	 *
	 * @var Page
	 */
	protected $page;

	public function __construct(Page $page)
	{
		$this->page = $page;
		$this->beforeFilter('auth', array('except' => 'show'));
	}
	
	public function index()
	{
		$pages = $this->getAllPages();

		return View::make('pages.index', compact('pages'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if ( $this->page->isValid($input = Input::all()) )
		{
			$this->page->create($input);
			return Redirect::route('pages.index');
		}

		return Redirect::route('pages.create')->withInput()->withErrors($this->page->$errors);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$page = $this->page->find($id);
		return View::make('pages.show', compact('page'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$page = $this->page->find($id);

		if (is_null($page))
		{
			return Redirect::route('pages.index');
		}

		return View::make('pages.edit', compact('page'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');

		if ( $this->page->isValid($input) )
		{
			$page = $this->page->find($id);
			$page->update($input);

			return Redirect::route('pages.show', $id);
		}

		return Redirect::route('pages.edit', $id)
			->withInput()
			->withErrors()
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->page->find($id)->delete();

		return Redirect::route('pages.index')->with('message', 'Page succesfully deleted!');
	}

	/**
	 * PRIVATE FUNCTIONS GO HERE ******************************************* >>>
	 *
	 */
	private function getAllPages() {
		return $this->page->all();
	}
}
