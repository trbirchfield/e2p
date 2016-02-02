<?php namespace App\Http\Client\Controllers;

class PrivacyController extends BaseController {
    /**
     * Home page.
     *
     * @return Response
     */
    public function getIndex() {
        $page_title   = 'Privacy Policy';
        $body_classes = ['document'];

        return view('client::privacy.index', compact('page_title', 'body_classes'));
    }
}
