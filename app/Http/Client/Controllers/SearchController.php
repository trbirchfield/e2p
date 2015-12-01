<?php namespace App\Http\Client\Controllers;

use App\Models\FAQ;
use App\Models\Section;
use Illuminate\Http\Request;

class SearchController extends BaseController {
    /**
     * Search Constructor
     *
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }

    /**
     * Home page.
     *
     * @return Response
     */
    public function getIndex() {
        $page_title = 'Search';
        $body_classes = ['document'];
        $input = $this->request->all();
        if (!empty($input['search'])) {
            //Init Values
            $list   = [];
            $search = '%' . $input['search'] . '%';

            // Begin search through section & faqontent
            $section  = Section::where('title', 'like', $search)->orWhere('body', 'like', $search)->orderBy('id')->get();
            $faq      = FAQ::where('question', 'like', $search)->orWhere('answer', 'like', $search)->orderBy('id')->get();
            $tables   = [$section, $faq];
            foreach ($tables as $res) {
                foreach ($res as $row) {
                    $list[] = $row->toArray();
                }
            }

            return view('client::search.index', compact('page_title', 'body_classes', 'list'));
        }

        return view('client::search.index', compact('page_title', 'body_classes'));
    }
}
