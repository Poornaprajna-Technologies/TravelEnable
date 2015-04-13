<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Validator;
use Input;

use App\form;

use Hash;

use Redirect;

class ChangeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function leisure()
	{
		return view('Leisure');
	}
	public function form()
	{

		   print_r($_POST);exit;
		/*$rules = array(
			'destination' => 'required',
			'travelling' =>'required',
			'date' =>'required',
			'No_of_Nights'=>'required',
			'remark'=>'required',
			'adults'=>'required|integer',
			'activity'=>'required',
			'purpose'=>'required',
			'email'=>'required'
		);

		 $validator = Validator::make(Input::all(), $rules);

		 if ($validator->fails()) {
		 	$messages = $validator->messages();
		 	return Redirect::to('Leisure')->withErrors($validator)->withInput();
            
         }else{
         	 $form= new form;
        	$form->destination    = Input::get('destination');
        	$form->travelling  =Input::get('travelling');
        	$form->date = Input::get('date');
        	$form->No_of_Nights=Input::get('No.of Nights');
        	$form->remark=Input::get('remark');
        	//$duck->email    = Input::get('email');
        	//$duck->password = Hash::make(Input::get('password'));

        // save our duck
        	$form->save();

       

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('Form');
         }*/
            

	}

	
}
