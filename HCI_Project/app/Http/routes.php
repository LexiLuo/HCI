<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', [
        'middleware' => 'guest', 'as' => 'login', 'uses' => 'loginController@loginGet']);

    Route::post('/login', [
        'middleware' => 'guest', 'uses' => 'loginController@loginPost']);

    Route::get('/logout', [
        'middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

    Route::get('/sport', [
        'as' => 'sport_home', 'uses' => 'sportController@home']);

    Route::get('/allActivities', [
        'as' => 'allActivities', 'uses' => 'activityController@home']);

    Route::get('/myActivities', [
        'as' => 'allActivities', 'uses' => 'myActController@home']);

    Route::get('/newActivity', function () {
        return view('activites/newActivity');
    });

    Route::post('/Activity/add','activityController@add');

    Route::get('/Activity/num', 'activityController@people');
    Route::get('/Activity/startTime', 'activityController@startTime');
    Route::get('/Activity/money', 'activityController@money');
    Route::get('/Activity/type', 'activityController@type');

    Route::get('/ActivityDetail/{id}', 'activityController@findOne');

    Route::get('/joinActivity/{id}', 'activityController@join');

    Route::get('/deleteActivity/{id}', 'myActController@delete');

    Route::post('/searchActivity', 'activityController@search');

    Route::get('/moments', [
    'as' => 'moments', 'uses' => 'momentController@home']);

    Route::get('/myMoments', [
        'as' => 'myMoments', 'uses' => 'mymomentController@home']);

    Route::get('/check','momentController@checkIn');

    Route::get('/good/{id}','momentController@good');

    Route::get('/addMoment','momentController@addMoment');

    Route::get('/wealth', 'WealthController@home');

    Route::get('/setting', function () {
        return view('personal/setting');
    });
    Route::get('/friends', 'FriendController@friends');

    Route::get('/addfriends', 'FriendController@addFriend');

    Route::get('/deleteFriend/{id}', 'FriendController@delete');

    Route::get('/register', function () {
        return view('login/register');
    });
    Route::get('/message', [
        'as' => 'Messages', 'uses' => 'MessageController@home']);

    Route::post('/deleteMessage', 'MessageController@delete');
});
