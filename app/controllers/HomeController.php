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

		$lastQuotes = Quote::with('person')->orderBy('id','DESC')->take(5)->get();
		$People = Person::all();
		return View::make('index.index',compact('lastQuotes','People'));

		// ----

	}

}