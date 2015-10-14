<?php namespace App\Http\Client\Controllers;

class SectionController extends BaseController {
    /**
     * Section pages.
     *
     * @return Response
     */
    public function getIndex($section = '1', $subsection = '0') {
        if ($section < 4) {
            $page_title = 'Select an Evidence Based Program';
        } else {
            $page_title = 'Implement an Evidence Based Program';
        }
        $body_classes = ['document'];

        if (view()->exists('client::section.' . $section . '_' . $subsection)) {
            return view('client::section.' . $section . '_' . $subsection, compact('page_title', 'body_classes', 'section', 'subsection'));
        } else {
            return redirect()->route('home');
            // Uncomment if we plan on having custom 404 page
            // abort(404);
        }
    }
}
