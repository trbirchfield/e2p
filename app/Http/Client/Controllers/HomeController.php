<?php namespace App\Http\Client\Controllers;

class HomeController extends BaseController {
	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function getIndex() {
		$page_title       = 'Home';
		$meta_description = '--- meta description ---';

		return view('client::home.index', compact('page_title', 'meta_description'));
	}
}
