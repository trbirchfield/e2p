<?php namespace App\Http\Admin\Requests;

use App\Http\Requests\Request;
use App\Models\Level;

class FeaturedProgramCommentsRequest extends Request {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return TRUE;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		$rules = [
			'comment' => ['required']
		];

		return $rules;
	}

	/**
	 * Get the custom messages for this request.
	 *
	 * @return array
	 */
	public function messages() {
		return [
			'comment.required' => 'Comment is required.'
		];
	}
}
