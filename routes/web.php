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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','WelcomeController@index');
Route::get('/about','WelcomeController@about');
Route::get('/contact','WelcomeController@contact');
Route::get('/causes','WelcomeController@causes');
Route::get('/elements','WelcomeController@elements');
Route::get('/news','WelcomeController@news');
Route::get('/portfolio','WelcomeController@portfolio');
Route::get('/single-causes','WelcomeController@single_causes');
Route::get('/volunteer','WelcomeController@volunteer');
Route::get('/donate','WelcomeController@donate');
Route::get('/payment','WelcomeController@payment');
Route::get('/return','WelcomeController@payment_confirm');
Route::get('/addcart/{id}','WelcomeController@addcart');
Route::get('/cart','WelcomeController@cart');
Route::get('/cartremove/{id}','WelcomeController@cartremove');
Route::post('/cartupdate','WelcomeController@cartupdate');
Route::get('/details','WelcomeController@details');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkout','WelcomeController@checkout');
Route::get('/payment','WelcomeController@payment');
Route::get('/return','WelcomeController@payment_confirm');
Route::post('/search','WelcomeController@search');
// admin
Route::get('/project','ProjectController@index');
Route::get('/add-project','ProjectController@add_project');
Route::get('/pro-delete_{id}','ProjectController@delete_project');

Route::post('/save-project','ProjectController@save_project');

// donar
Route::get('/donar-list','DonarController@donar');
Route::get('/confirm_{id}','DonarController@confirm');
Route::get('/completed-donar','DonarController@completed');
Route::get('/donar-delete_{id}','DonarController@donar_delete');