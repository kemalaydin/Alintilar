<?php
class QuotesController extends BaseController {

	public $restful = true;

	public function action_index() {

		return 'index la';

	}
	public function action_new() {
		return 'yeni form';
	}

	public function post_index() {
		return 'Yeni söz olusturmaca söz: ' . e(Input::get('soz')) . ' de bu';
	}

	public function get_edit($id) {
		return $id;
	}
}