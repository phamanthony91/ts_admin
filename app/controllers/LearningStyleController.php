<?php

class LearningController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function learning_style()
	{

		// load the view and pass the questions
		return View::make('forms.learning_style')
			->with('forms', $forms);
	}

		public function edit($id)
	{
		// get the nerd
		$form = Form::find($id);

		// show the edit form and pass the nerd
		return View::make('forms.edit')
			->with('form', $form);
	}