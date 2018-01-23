<?php



Route::get('hello', 'HelloController@index');
// Route::get('hello', 'HelloController@post');
Route::get('hello/add','HelloController@add');
Route::post('hello/add','HelloController@create');
Route::get('hello/edit','HelloController@edit');
Route::get('hello/edit','HelloController@update');
Route::get('hello/del','HelloController@del');
Route::get('hello/del','HelloController@remove');
Route::get('hello/show', 'HelloController@show');

 








?>

