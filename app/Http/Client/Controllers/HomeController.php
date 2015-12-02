<?php namespace App\Http\Client\Controllers;

use Symfony\Component\DomCrawler\Crawler;

class HomeController extends BaseController {
	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function getIndex() {
		$page_title = 'Home';

		return view('client::home.index', compact('page_title'));
	}
}
