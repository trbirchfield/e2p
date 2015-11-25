<?php namespace App\Http\Api\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQsController extends BaseController {
	/**
	 * Setup instance.
	 *
	 * @param  FAQ $model
	 * @param  Request $request
	 * @return void
	 */
	public function __construct(FAQ $model, Request $request) {
		$this->model   = $model;
		$this->request = $request;
	}

	/**
	 * Return a list of user statuses.
	 *
	 * @return Response
	 */
	public function getStatuses() {
		$list = $this->model->getStatuses();

		return response()->json($list, (is_null($list)) ? 422 : 200);
	}

	/**
	 * Return a list of user statuses.
	 *
	 * @return Response
	 */
	public function postAskQuestion() {
		// TODO: Complete method so that it sends an email to client
		$res = 'success';

		return response()->json($res, (is_null($res)) ? 422 : 200);
	}
}
