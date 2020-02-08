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
//     return view('front-end.home');
//  });

 Route::get('/','Frontend\FrontendController@index');
 
 Route::get('/admin', function () {
     return redirect()->to('admin/dashboard');
 });
 

 Route::get('/log', function () {
   // return redirect()->to('admin/dashboard');
   return view('back-end.admin.login');
});

 
