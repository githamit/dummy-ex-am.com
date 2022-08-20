<?php

use Illuminate\Support\Facades\Route;

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


Route::get('superadmin/index',['as'=>'index','uses'=>'SuperadminController@index']);

Route::get('registration',['as'=>'registration','uses'=>'RegistrationController@Registration']);



// new auth registration

Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/home', 'Auth\AuthController@home')->name('home');





// Route::post('registration',['as'=>'registration','uses'=>'RegistrationController@brideGroomRegistrationCreate']);
// Route::get('login',['as'=>'login','uses'=>'RegistrationController@brideGroomLoginForm']);
// Route::post('login',['as'=>'login','uses'=>'RegistrationController@brideGroomSuperAdminLogin']);