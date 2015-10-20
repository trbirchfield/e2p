<?php namespace App\Http\Api\Controllers;

use App\Models\FAQCategory;
use Illuminate\Http\Request;

class FAQCategoriesController extends BaseController {
	/**
	 * Setup instance.
	 *
	 * @param  FAQCategory $model
	 * @param  Request $request
	 * @return void
	 */
	public function __construct(FAQCategory $model, Request $request) {
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
	 * Return a list of FAQ Categories.
	 *
	 * @return Response
	 */
	public function getList() {
		$list = $this->model->getList();

		return response()->json($list, (is_null($list)) ? 422 : 200);
	}
}
