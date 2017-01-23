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

// V2 amb Controllers

Route::get( "/", "HomeController@getHome" );

Route::resource( 'catalog', "CatalogController" );


// V1 Routes directes a les views
/*
Route::get('/', function () {
    return view('index',array("nom"=>"Enric"));
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return "logout";
});

Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show');
});

Route::get('/catalog/create', function () {
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit');
});

*/