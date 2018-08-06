<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    return view('foo'); 
});

Route::get('/bar', function () {
    return view('bar'); 
});

Route::get('/foo', function () {
    return view('foo'); 
});
Route::get('/basic-arithmetic/{operation}/{num1}/{num2}', function($operation,$num1,$num2){
	return view('basic-arithmetic',
		array('operation'=>$operation,
			  'num1'=>$num1,
			  'num2'=>$num2,
			  'sum'=>$sum=$num1+$num2,
			  'diff'=>$diff=$num1-$num2,
			  'mul'=>$mul=$num1*$num2,
			  'div'=>$div=$num1/$num2
			));
})->name('basic-arithmetic');

Route::get('/middleware/{age}', function ($age){
	return view('age', array('age'=>$age));
});

Route::get('/pages/contact',
'PagesController@contactPage');

Route::get('/pages/middleware/{age}',
'PagesController@middlewareAgePage');

Route::get('/pages/shoutout/{text}',
'PagesController@shoutoutPage')->name('shoutout');

Route::get('/crushes', 'CrushesController@index');

Route::get( '/crushes/create', 'CrushesController@create' )->name( 'crushes.create' );

Route::post( '/crushes/store', 'CrushesController@store' )->name( 'crushes.store' );

Route::get( '/crushes', 'CrushesController@index' )->name( 'crushes.index' );

Route::get( '/crushes/{id}/edit', 'CrushesController@edit' )->name( 'crushes.id.edit' ); 

Route::post( '/crushes/{id}/update', 'CrushesController@update' )->name( 'crushes.id.update' ); 

Route::get( '/crushes/{id}/destroy', 'CrushesController@destroy' )->name( 'crushes.id.destroy' );