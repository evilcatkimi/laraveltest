<?php
Route::get('/', function(){
	return view('user.create');
});

//Test route ok
Route::get('cat', function(){
	return "Cat";
});

//url user form:
Route::get('user/create','UserController@create');

//url submit form:
Route::post('user/create','UserController@store');

Route::get('/checkDB', function ()
{
	echo "Check DB <br>";
	if(DB::connection()->getDatabaseName())
	{
		echo "connected successfully to database ".DB::connection()->getDatabaseName();
	}
});

Route::get('user','UserController@index');

Route::get('user/{id}/edit','UserController@edit');
Route::post('user/update','UserController@update');


Route::get('user/{id}/delete','UserController@destroy');