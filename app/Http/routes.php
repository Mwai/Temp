<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
get('/', function () {
    return redirect('/home');
});
get('home', 'PageController@index');

get('admin', function () {
    return redirect('/admin/page');
});
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    resource('admin/page', 'PageController');
    get('admin/upload', 'UploadController@index');
    Route::get('admin/page', 'PageController@viewGalleryList');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {

    Route::get('/', 'ProfileController@getUser');

    Route::post('edit', 'ProfileController@postEdit');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);
$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::resource('profile', 'ProfileController');

Route::get('gallery/list', 'GalleryController@viewGalleryList');
Route::resource('gallery/save', 'GalleryController@saveGallery');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');
Route::get('gallery/view/{id}', 'GalleryController@viewGallerypics');
Route::resource('image/do-upload', 'GalleryController@doImageUpload');

