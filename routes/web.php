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

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => 'auth',
],function () {



    Route::resource('dashboard', 'DashboardController')->only([
        'index', 'show','create'
    ]);
    //Route::get('/projecs','ProjectController@index')->name('projedct.create');

    
//Projects
    // Route::get('/projects','ProjectController@index')->name('project.index');
    // Route::get('/project/create','ProjectController@create')->name('project.create');
    // Route::post('/project/store','ProjectController@store')->name('project.store');
    // Route::get('/project/edit','ProjectController@edit')->name('project.edit');
    // Route::get('/project/update','ProjectController@update')->name('project.update');
    // Route::get('/project/delete/{id}','ProjectController@destroy')->name('project.destroy');

//Portfolio
Route::get('/portfolio','PortfolioController@index')->name('portfolio.index');
    Route::get('/portfolio/create','PortfolioController@create')->name('portfolio.create');
    Route::post('/portfolio/store','PortfolioController@store')->name('portfolio.store');
    Route::get('/portfolio/edit','PortfolioController@edit')->name('portfolio.edit');
    Route::get('/portfolio/update','PortfolioController@update')->name('portfolio.update');
    Route::get('/portfolio/delete/{id}','PortfolioController@destroy')->name('portfolio.destroy');

});







Route::get('/home', 'HomeController@index')->name('home');

