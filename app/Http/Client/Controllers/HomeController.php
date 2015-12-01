<?php namespace App\Http\Client\Controllers;

use App\Models\Announcement;

class HomeController extends BaseController {
	/**
	 * Home page.
	 *
	 * @return Response
	 */
	public function getIndex() {
		// Setup
		$page_title        = 'Home';
		$announcements     = Announcement::getModel()->getHomepageAnnouncements();
		$new_announcements = Announcement::getModel()->newHomepageAnnouncements();

		return view('client::home.index', compact('page_title', 'announcements', 'new_announcements'));
	}
}
