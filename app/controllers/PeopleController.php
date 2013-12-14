<?php
class PeopleController extends BaseController {

	public $restful = true;

	public function index() {

		dd(Person::all());
		return 'index la';

	}

	public function action_index() {

		dd(Person::all());
		return 'action index la';

	}
	public function action_new() {
		//Sadece adamın adını al
		return 'yeni form';
	}

	public function post_index() {
		//Adamı database e kaydet
		//TODO: Sadece admine açık

		$person = new Person;
		$person->name = Input::get('name');
		$person->save();
		return 'Adamın adı: ' . e(Input::get('name'));
	}

	public function get_edit($id) {
		return $id;
	}
}