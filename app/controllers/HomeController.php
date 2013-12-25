<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index(){

		// Ana sayfada listelenecek son 5 alıntıyı view'a  gönderiyoruz ---> 

		$lastQuotes = Quote::with('person')->orderBy('id','DESC')->paginate(10);
		//$RightPeople = Person::all();
		//return View::make('index.index',compact('lastQuotes','rightPeople'));
		return View::make('index.index',
			array('lastQuotes' => $lastQuotes,'rightPeople' => $this->rightPeople));

		// ----

	}

}