<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


// Route::get('quotes/(:any)/edit', 'quotes@edit');
// //Route::controller(Controller::detect());

// Route::model('quote', 'Quote');
// Route::get('al/{quote}', function(Quote $quote)
// {
// 	echo $quote->quote;
// 	echo " s-";
// 	echo $quote->person->name;
// });
Route::resource('person', 'PeopleController');
Route::resource('product', 'ProductsController');
Route::resource('type', 'TypesController');
Route::resource('quote', 'QuotesController');

//Route::model('person', 'Person');

Route::get('/','HomeController@index');


Route::post('person_ajax', function()
{
	// $q = Quote::find($id);
	// echo $q->quote;



	//&& Request::ajax() 

	$hepsi = Input::all();
	$yazi = $hepsi['term'];

	if (strlen($yazi) >= 3 )
	{
	    return Person::where('name', 'like', "$yazi%")->get(array('name'))->toJson();
	}

	//return 'kaka';

});

Route::get('/alinti/{id?}', function($id = 1)
{
	$q = Quote::find($id);
	echo $q->quote;

})->where('id', '[0-9]+');