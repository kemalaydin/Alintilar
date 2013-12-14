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


Route::get('quotes/(:any)/edit', 'users@edit');
//Route::controller(Controller::detect());

Route::model('quote', 'Quote');
Route::get('al/{quote}', function(Quote $quote)
{
	echo $quote->quote;
	echo " s-";
	echo $quote->person->name;
});

Route::get('/', function()
{
	/*
	$person = new Person;
	$person->name = 'İbrahim Tatlıses';
	$person->save();

	$type = new Type;
	$type->type = 'Söz';
	$type->save();

	$product = new Product;
	$product->name = ' ';
	$product->type()->associate($type);
	$product->save();

	$quote = new Quote;
	$quote->quote = 'Ben donsuz karı severim';
	$quote->person()->associate($person);
	$quote->product()->associate($product);
	$quote->save();
	*/

	$quote = Quote::find(1);

	echo $quote->quote;
	echo " -";
	echo $quote->person->name;

});

Route::get('/alinti/{id?}', function($id = 1)
{
	$q = Quote::find($id);
	echo $q->quote;


})->where('id', '[0-9]+');