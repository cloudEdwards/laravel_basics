<?php

class PagesController extends BaseController {

	/**
	 * Display the Home page.
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('pages.home');
	}


	/**
	 * Display Services page.
	 *
	 * @return Response
	 */
	public function services()
	{
		return View::make('pages.services');
	}


	/**
	 * Display Contact page.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return View::make('pages.contact');
	}
	

}
