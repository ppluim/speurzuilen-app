<?php

class UsersController extends \BaseController {

	public function getLogin()
	{
		return View::make('users.login');
	}

	public function postLogin() {
		$input = Input::all();

		$rules = array('email' => 'required', 'password' => 'required');

		$validator = Validator::make($input, $rules);

		if($validator->fails()) {
			
			return Redirect::to('login')->withErrors($validator);
		
		} else {

			$credentials = array('email' => $input['email'], 'password' => $input['password']);

			if(Auth::attempt($credentials)) {

				return Redirect::route('pages.index');
				// return "Auth attempted";
			
			} else {
				return Redirect::back()->withErrors($credentials);
			}
		}
	}

	public function getRegister()
	{
		return View::make('users.register');
	}

	public function postRegister() 
	{
		$input = Input::all();

		$rules = array(
			'username' => 'required|unique:users', 
			'email' => 'required|unique:users|email',
			'password' => 'required'
		);

		$validator = Validator::make($input, $rules);

		if($validator->passes()) 
		{
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new User();
			$user->username = $input['username'];
			$user->role = $input['role'];
			$user->email = $input['email'];
			$user->password = $password;
			$user->save();

			return Redirect::to('login');

		} 
		else 
		{
			return Redirect::to('register')->withInput()->withErrors($validator);
		}
	}

	public function logout() {

		Auth::logout();
		return Redirect::to('login');
	}

}