<?php namespace App\Http\Client\Controllers;

class AboutController extends BaseController {
	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function getIndex() {
		$page_title   = 'About the Community Research Center for Senior Health';
		$body_classes = ['document'];

		return view('client::about.index', compact('page_title', 'body_classes'));
	}
}
