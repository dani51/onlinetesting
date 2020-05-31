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





Auth::routes();
//Route::get('/user-login', 'UserPanelController@login');
//Route::post('/user-reg', 'UserPanelController@getsignup')->name("user-reg");
//Route::get('/user-signup', 'UserPanelController@signup');
Route::get('/thank-you', 'UserPanelController@thanks');
Route::get('/main-page', 'PublicController@main');
Route::get('/join-us', 'PublicController@joinUs')->name('join-us');
Route::post('/test-submission', 'UserPanelController@testSubmission');

//// ////////////////admin login and logout route
//
//Route::get('/admin-login', 'Auth\AdminController@ShowLoginForm');
//Route::get('/admin-logout', 'Auth\AdminController@logout');
////Route::get('/admin-logout', 'Auth\AuthController@logout');
//
//
////////////////////////// end admin login and logout route
//Route::post('/admin-login', 'Auth\AdminController@login');
//Route::get('/take-test', 'UserPanelController@displayTest');
//calling controller and its function
Route::get('/user-subjects','UserPanelController@index')->name('user-subjects');
Route::get('/search', 'UserPanelController@searchSubject')->name('search');
Route::get('/take-test{id}',[
    'uses' => 'UserPanelController@displayTest',
    'as' => 'take-test.route'
]);

//Route::get('/admin-login-show', 'Auth\AdminController@ShowLoginForm');
//Route::get('/admin-logout', 'Auth\AdminController@logout');
////Route::get('/admin-logout', 'Auth\AuthController@logout');
//
//
////////////////////////// end admin login and logout route
//Route::post('/admin-login', 'Auth\AdminController@login');

Route::get('/', 'HomeController@index');

Route::resource('subjects', 'subjectsController');


Route::resource('questions', 'questionsController');
Route::resource('options', 'optionsController');

Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
//  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');
    Route::get('/logout', 'Auth\AdminController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'customer'], function () {
//    Route::any('/search',function(){
//
//    });
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');

  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});
