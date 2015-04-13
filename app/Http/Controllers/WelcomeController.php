<?php namespace App\Http\Controllers;

Use Request;
use Validator;
use Input;
use Hash;
use Redirect;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	

	public function medical()
	{
		return view('Medical');
	}
	public function accom()
	{
		return view('Accom');
	}
	public function form()
	{
		return view('Form');
	}
	public function store()
	{
		/*$input=request::all();
		return $input;*/
		 $data = \Illuminate\Support\Facades\Request::all();
    	return $data;
	}

}

