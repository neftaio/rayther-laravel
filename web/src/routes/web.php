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

// Route::get('/', function () {
//     return view('welcome');
// });

// /* Route for Home page */
Route::get('/', 'MainsiteController@getHome')
->name('home');
/* Route for contactus */
Route::get('/contactanos', 'MainsiteController@getContactus')
->name('contactus');
/* Route for small cars */
Route::get('/alquiler-de-carros-economicos-pequenos', 'MainsiteController@getSmallcars')
->name('smallcars');
/* Route for suv cars */
Route::get('/alquiler-de-camionetas-suv', 'MainsiteController@getSuvcars')
->name('suvcars');
/* Route for middle cars */
Route::get('/alquiler-de-carros-medianos-familiares', 'MainsiteController@getMidcars')
->name('midcars');
/* Route for aboutus */
Route::get('/sobre-nosotros', 'MainsiteController@getAboutus')
->name('aboutus');
/* Route for delivery */
Route::get('/servicio-a-domicilio', 'MainsiteController@getDelivery')
->name('delivery');
// Route for send notify
Route::post('/enviarmensaje', 'MainsiteController@postSendnotify')
->name('sendemail');