<?php namespace App\Http\Client\Controllers;

class ProgramsController extends BaseController {
    /**
     * Home page.
     *
     * @return Response
     */
    public function getIndex() {
        $page_title = 'Featured Programs';
        $body_classes = ['document'];

        return view('client::programs.index', compact('page_title', 'body_classes'));
    }
}
