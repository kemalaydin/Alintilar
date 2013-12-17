<?php
class PeopleController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Tum kisileri goster
		//dd(Person::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//Kişi oluşturma formunu göster
		//Formu /person a post at
		return View::make('personCreateFrom');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Adamı database e kaydet
		//TODO: Sadece admine açık


		$rules = array(
			'name' => 'unique:people'
			);

		$data = Input::all();

		$validator = Validator::make($data, $rules);

		if ($validator->passes())
		{
			$person = new Person;
			$person->name = Input::get('name');

			$person->save();
		} else {
			$messages = $validator->messages();
		}


		return 'Adamın adı: ' . e(Input::get('name')) . ' ' . @$messages;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Adamın tüm alıntılarını gösterecek

		if(is_string($id)) $name = $id;
		else $name = "";

		//&& Request::ajax() 

		if (strlen($name) >= 3 )
		{
		    return Person::where('name', 'like', "$name%")->get()->toJson();
		}

		return $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Ajax_get.
	 *
	 * @param  string  $name
	 * @return Response
	 */
	public function ajax($name)
	{

	}
}