<?php
class QuotesController extends BaseController {

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
		//Alıntı oluşturma formunu göster
		// kişiyi ajaxla bul
		// product ı ajaxla bul
		//Formu /alınti a post at
		return View::make('quoteForm');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		//alıntıları database e kaydet
		//kişiyi ve ürünü control et yoksa yeni oluştur

		$rules = array(
			'person_name' => 'required',
			'quote' => 'required',
			'product_name' => 'required',
			);
		$data = Input::all();

		$validator = Validator::make($data, $rules);

		if($validator->fails()) {
			return 'olmadi';
		}

		
		//Veritabanında o kişi varsa idsini al yoksa kaydetip al
		$person = Person::where_name($data->person_name)->first();

		if($person) {
			$person_id = $person->id;
		} else {
			$person = new Person;
			$person->name = $data->person_name;
			$person->save();

			$person_id = $person->id;
		}

		//Veritabanında o ürün varsa idsini al yoksa kaydetip al
		$product = Product::where_name($data->product_name)->first();

		if(!$product) {

			$product = Product::create(array(
				'name' => $data->product_name,
				'type_id' => 1
				));
		}



		$quote = new Quote;
		$quote->quote = $data->quote;
		$quote->person->associate($person);
		$quote->product->associate($product);

		$quote->save();

		return 'bisiler';




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
}