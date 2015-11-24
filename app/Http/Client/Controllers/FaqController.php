<?php namespace App\Http\Client\Controllers;

class FaqController extends BaseController {
    /**
     * Home page.
     *
     * @return Response
     */
    public function getIndex() {
        $page_title = 'Frequently Asked Questions';
        $body_classes = ['document'];

        return view('client::faq.index', compact('page_title', 'body_classes'));
    }
}
