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

Route::get('/', function () {
    return view('welcome');
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
    Route::get('/user/create', 'Admin\UserController@create')->name('user.create');
    Route::post('/user/create', 'Admin\UserController@store')->name('user.store');
    Route::get('/user/{id}', 'Admin\UserController@view')->name('user.detail');
    Route::get('/user/{id}/delete', 'Admin\UserController@delete')->name('user.delete');
    Route::post('/user/update', 'Admin\userController@update')->name('user.update');

    Route::get('/user/{id}/stat','Admin\UserController@stat')->name('user.activity.stat');
    
});


Route::prefix('/dashboard')
    ->name('admin.')
    ->middleware(['auth', 'role:user,admin'])
    ->group(function() {

        Route::get('/user/{id}/start', 'ActivityController@start')->name('activity.start');
        Route::get('/user/{id}/stop', 'ActivityController@stop')->name('activity.stop');

        Route::prefix('/user/tag')->name('user.tag.')->group(function() {
            Route::post('/add', 'Admin\User\tagController@store')->name('add');
            Route::get('/remove/{id}', 'Admin\User\tagController@delete')->name('delete');
            Route::get('/remove/user/{id}', 'Admin\User\tagController@deleteAll')->name('deleteAll');
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
