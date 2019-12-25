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

Route::get('login', function() {
    return redirect('/#login');
});
Route::get('register', function() {
    return redirect('/#regiter');
});

Route::name('page.')->group(function() {

    Route::view('/','welcome')->name('index');
    Route::view('/about','about')->name('about');
    Route::view('/prices','prices')->name('prices');
    Route::get('/blog','BlogController@index')->name('blog');
    Route::get('/blog/{file}', 'BlogController@view')->name('blog.view');
    Route::view('/guide','guide')->name('guide');
    Route::view('/faq','faq')->name('faq');
    Route::view('/terms','terms')->name('terms');
    Route::view('/privacy','privacy')->name('privacy');
});


Route::get('/signout', 'Auth\LoginController@logout')->name('logout');

Route::name('activity.')
    ->middleware(['auth', 'role:user,admin'])
    ->prefix('app/')
    ->group(function() {

    Route::get('/', 'ActivityController@index')->name('index');
    Route::get('/stat', 'ActivityController@stat')->name('stat');
});


Route::name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->group(function() {

    Route::get('/', 'AdminController@index')->name('index');

    Route::prefix('/user')->name('user.')->group(function() {
        Route::get('/create', 'Admin\UserController@create')->name('create');
        Route::post('/create', 'Admin\UserController@store')->name('store');
        Route::get('/{id}', 'Admin\UserController@view')->name('detail');
        Route::get('/{id}/delete', 'Admin\UserController@delete')->name('delete');
        Route::post('/update', 'Admin\userController@update')->name('update');
        Route::get('/{id}/stat','Admin\UserController@stat')->name('activity.stat');
        Route::get('/{id}/stat/{stat}', 'Admin\UserController@setStat' )->name('set.stat');
    });


    // email list
    Route::prefix('/email')->name('email.')->group(function() {
        Route::get('/', 'Admin\EmailController@index')->name('index');
        Route::get('/create', 'Admin\EmailController@create')->name('create');
        Route::post('/create', 'Admin\EmailController@store')->name('store');
        Route::get('/{id}/delete', 'Admin\EmailController@delete')->name('delete');
        Route::put('/update', 'Admin\EmailController@update')->name('update');
        Route::get('/{id}', 'Admin\EmailController@edit')->name('edit'); 
    });
    //user images
    Route::prefix('/user/{id}/images')->name('image.')->group(function() {
        Route::get('/', 'Admin\ImageController@index')->name('index');
        Route::post('/', 'Admin\ImageController@store')->name('store');
        Route::get('/{imageId}/delete', 'Admin\ImageController@delete')->name('delete');
    });
    
});


Route::prefix('/dashboard')
    ->name('admin.')
    ->middleware(['auth', 'role:user,admin'])
    ->group(function() {

        Route::get('/user/{id}/start', 'ActivityController@start')->name('activity.start');
        Route::get('/user/{id}/stop', 'ActivityController@stop')->name('activity.stop');

        Route::prefix('/user/tag')->name('user.tag.')->group(function() {
            Route::post('/add', 'Admin\User\TagController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\TagController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\TagController@deleteAll')->name('deleteAll');
        });
    
        Route::prefix('/user/location')->name('user.location.')->group(function() {
            Route::post('/add', 'Admin\User\LocationController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\LocationController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\LocationController@deleteAll')->name('deleteAll');
        });
    
        Route::prefix('/user/username')->name('user.username.')->group(function() {
            Route::post('/add', 'Admin\User\UsernameController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\UsernameController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\UsernameController@deleteAll')->name('deleteAll');
        });
        Route::prefix('/user/blacklist/tag')->name('user.tagblacklist.')->group(function() {
            Route::post('/add', 'Admin\User\TagBlacklistController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\TagBlacklistController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\TagBlacklistController@deleteAll')->name('deleteAll');
        });
        Route::prefix('/user/blacklist/keyword')->name('user.keywordblacklist.')->group(function() {
            Route::post('/add', 'Admin\User\KeywordBlacklistController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\KeywordBlacklistController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\KeywordBlackListController@deleteAll')->name('deleteAll');
        });
        Route::prefix('/user/blacklist/username')->name('user.usernameblacklist.')->group(function() {
            Route::post('/add', 'Admin\User\UsernameBlacklistController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\UsernameBlacklistController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\UsernameBlacklistController@deleteAll')->name('deleteAll');
        });
        Route::prefix('/user/comment')->name('user.comment.')->group(function() {
            Route::post('/add', 'Admin\User\CommentController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\CommentController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\CommentController@deleteAll')->name('deleteAll');
        });

        Route::post('/user/update', 'Admin\User\UserController@update')->name('user.update');
        Route::post('/user/change', 'Admin\User\UserController@resetUser')->name('user.change');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
