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
use Intervention\Image\Image;

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

// Route::get('/alinti/{id?}', function($id = 1)
// {
// 	$q = Quote::find($id);
// 	echo $q->quote;

// })->where('id', '[0-9]+');

Route::get('naber', function() 
{
	// // create Image from file
	// $img = Image::make('foso.jpg');

	// // write text
	// $img->text('The quick brown fox jumps over the lazy dog.');

	// // write text with more parameters (position 0,0; size 24pt; color #cccccc)
	// $img->text('The quick brown fox jumps over the lazy dog.', 0, 0, 24, '#cccccc');

	// // write half transparent text
	// $img->text('foo', 0, 0, 72, array(255, 255, 255, 50));


	// create a new empty image resource with transparent background
//$img = Image::canvas(800, 600);

// create a new empty image resource with red background
$img = Image::canvas(480,360, '#ff0000');

$img->text('The quick brown fox jumps over the lazy dog.', 0, 0, 24, '#cccccc');

//$img->save('naber.jpg');

return $img->response();

});

Route::get('twit', function()
{
    return Twitter::postTweet(array('status' => 'Laravel is beautiful', 'format' => 'json'));
});


Route::get('/contact',function(){

	return View::make('constent.contact');

});

Route::get('lang/{lang}', function($lang)
{

	if($lang == "en")
	{
		Session::put('lang', 'en');
	}
	else
	{
   		Session::put('lang', 'tr');
   	}

   	return Redirect::to('/');
});