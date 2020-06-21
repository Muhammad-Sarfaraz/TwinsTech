<?php


Auth::routes();

Route::group([
    'namespace' => 'Backend',
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {



    Route::resource('dashboard', 'DashboardController')->only([
        'index', 'show', 'create'
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

    // Dashboard

    /* Client routes */
    Route::get('/client', 'ClientController@index')->name('client.index');
    Route::get('/client/create', 'ClientController@create')->name('client.create');
    Route::post('/client/store', 'ClientController@store')->name('client.store');
    Route::get('/client/edit/{id}', 'ClientController@edit')->name('client.edit');
    Route::put('/client/update/{id}', 'ClientController@update')->name('client.update');
    Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');



/*
|--------------------------------------------------------------------------
| Feedback Controller Routes
|--------------------------------------------------------------------------
|
| Endpoint: /admin/feedback
|
*/
    Route::get('feedback', 'FeedbackController@create')->name('feedback');
    Route::post('feedback/store', 'FeedbackController@store')->name('feedback.store');
    Route::get('feedback/delete/{id}', 'FeedbackController@destroy')->name('feedback.destroy');
    
/*
|--------------------------------------------------------------------------
| Blog Controller Routes
|--------------------------------------------------------------------------
|
| Endpoint: /admin/blog && admin/*
|
*/
    /* Blog routes */

    Route::get('blog', 'BlogController@index')->name('blog.index');
    Route::get('blog/create', 'BlogController@create')->name('blog.create');
    Route::get('blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
    Route::put('blog/update/{id}', 'BlogController@update')->name('blog.update');
    Route::post('blog/store', 'BlogController@store')->name('blog.store');
    Route::get('blog/delete/{id}', 'BlogController@destroy')->name('blog.destroy');
    Route::get('blog/status/update/{id}', 'BlogController@statusUpadate')->name('blog.status.upadate');





    Route::get('/view-comments-of-article', 'BlogController@viewComment')->name('blog.comments.view');

    Route::get('/comments/store', 'BlogController@storeComment')->name('blog.comments.store');
    Route::get('/comments/delete/{id}', 'BlogController@deleteComment')->name('blog.comments.delete');

/*
|--------------------------------------------------------------------------
| Team Controller Routes
|--------------------------------------------------------------------------
|
| Endpoint: /admin/team
|
*/
    Route::get('/team', 'TeamController@index')->name('team.index');
    Route::get('/team/create', 'TeamController@create')->name('team.create');
    Route::post('/team/store', 'TeamController@store')->name('team.store');
    Route::get('/team/edit/{id}', 'TeamController@edit')->name('team.edit');
    Route::put('/team/update/{id}', 'TeamController@update')->name('team.update');
    Route::get('/team/delete/{id}', 'TeamController@destroy')->name('team.delete');

/*
|--------------------------------------------------------------------------
| Slider Controller Routes
|--------------------------------------------------------------------------
|
| Endpoint: /admin/slider
|
*/
    Route::resource('slider', 'SliderController');
    Route::get('slider/destroy/{id}', 'SliderController@destroy');


    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

    // Setting Routes...

    // General Setting Routes...
    Route::get('settings/general-setting/', 'SettingController@create')->name('g.index');
    Route::get('settings/general-setting/', 'SettingController@create')->name('g.create');
    Route::get('settings/general-setting/', 'SettingController@create')->name('g.edit');
    Route::get('settings/general-setting/', 'SettingController@create')->name('g.store');


    // BackUp Routes...
    Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.index');
    Route::get('/portfolio/create', 'PortfolioController@create')->name('portfolio.create');
    Route::post('/portfolio/store', 'PortfolioController@store')->name('portfolio.store');
    Route::get('/portfolio/edit', 'PortfolioController@edit')->name('portfolio.edit');
    Route::get('/portfolio/update', 'PortfolioController@update')->name('portfolio.update');
    Route::get('/portfolio/delete/{id}', 'PortfolioController@destroy')->name('portfolio.destroy');




    Route::resource('site-information', 'SiteInformationController');
});

// HOME Routes...

Route::get('/home', 'HomeController@index')->name('home');



Route::get('teste/{id}', 'Backend\ClientController@de');

Route::get('status', 'Backend\ClientController@status');

Route::get('queries', 'Backend\ClientController@kenel');

Route::get('interface', 'Backend\ClientController@inte');

//test
Route::get('/del/{id}', 'backend\BlogController@destroy');


//yes

