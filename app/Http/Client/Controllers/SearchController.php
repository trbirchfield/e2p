<?php namespace App\Http\Client\Controllers;

class SearchController extends BaseController {
    /**
     * Home page.
     *
     * @return Response
     */
    public function getIndex() {
        $page_title = 'Search';
        $body_classes = ['document'];

        return view('client::search.index', compact('page_title', 'body_classes'));
    }
}
