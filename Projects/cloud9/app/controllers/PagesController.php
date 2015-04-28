<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

use Illuminate\Http\Request;

class PagesController extends Controller {

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
