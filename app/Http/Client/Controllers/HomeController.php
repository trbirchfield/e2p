<?php namespace App\Http\Client\Controllers;

class HomeController extends BaseController {
	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function getIndex() {
		$page_title = 'Project Template';

		return view('client::home.index', compact('page_title'));
	}
}
