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

/**
 * BEGIN GET ROUTING
 */

Route::get('/','Href\PageController@loadLogin');

Route::get('index','Form\FormController@login');

Route::get('service','Href\PageController@loadService');

Route::get('newservice', 'Href\PageController@newService');

Route::get('detailservice', 'Href\PageController@detailService');

Route::get('beautician', 'Href\PageController@loadBeautician');

Route::get('newbeautician', 'Href\PageController@newBeautician');

Route::get('detailbeautician', 'Href\PageController@detailBeautician');

Route::get('order', 'Href\PageController@loadOrder');

Route::get('detailorder', 'Href\PageController@detailOrder');

Route::get('user','Href\PageController@loadUser');

Route::get('newuser','Href\PageController@newUser');

Route::get('detailuser','Href\PageController@detailUser');

Route::get('city', 'Href\PageController@loadCity');

Route::get('newcity', 'Href\PageController@newCity');

Route::get('account', 'Href\PageController@loadAccount');

Route::get('newaccount', 'Href\PageController@newAccount');

Route::get('detailaccount', 'Href\PageController@detailAccount');

Route::get('deleteuser', 'Href\PageController@deleteUser');

Route::get('deleteAccount', 'Href\PageController@deteleAccount');

Route::get('deleteService', 'Href\PageController@deleteService');

Route::get('lockscreen','Href\PageController@lockScreen');

/**
 * END GET ROUTING
 */

/**
 * BEGIN POST ROUTING
 */

Route::post('/auth/login', 'Form\FormController@login');

/**
 * END POST ROUTING
 */

