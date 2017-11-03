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

if ( env('APP_ENV') != 'local' ) {
    \URL::forceRootUrl('http://foodconnection.uky.edu/signin');
}


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/submit', function () {
//    return view('submit');
//});
//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/events', 'EventController@index');
Route::get('events/{event}', 'EventController@show');
//Route::post('/events/{event}/attendees', 'AttendeeController@store');
Route::get('/events/{event}/signin', 'SigninController@create');
Route::post('/events/{event}/signin', 'SigninController@store');

/*Route::get('attendees/excel',
    [
        'as' => '??',
        'uses' => 'AttendeesController@excel'
    ]);*/

/*Route::get('/payments/excel',
    [
        'as' => 'admin.invoices.excel',
        'uses' => 'PaymentsController@excel'
    ]);*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
