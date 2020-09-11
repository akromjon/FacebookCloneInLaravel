<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


///////////////
Auth::routes();
//////////////

Route::group(['middleware'=>'guest'], function(){
    ///github
    Route::get('login/github','Auth\LoginController@github');
    Route::get('login/github/redirect','Auth\LoginController@githubRedirect');
    ///facebook
    Route::get('login/facebook','Auth\LoginController@facebook');
    Route::get('login/facebook/redirect','Auth\LoginController@facebookRedirect');
    ///google
    Route::get('login/google','Auth\LoginController@google');
    Route::get('login/google/redirect','Auth\LoginController@googleRedirect');
});

////////////////////
Route::get('/', 'feed\HomeController@index')->middleware('auth')->name('main');
Route::get('/home', 'HomeController@index')->name('home');
///////////////////


//////////////////////feed and post
Route::prefix('/feed')->namespace('feed')->middleware('auth')->group(function () {
    Route::get('/', 'HomeController@feedIndex')->name('feeds'); 
    Route::get('/{slug}','PostsController@show')->name('feeds.view');   
    Route::post('/', 'PostsController@store')->name('feeds.store'); 
    Route::get('/{slug}/edit', 'PostsController@edit')->name('feeds.edit');
    Route::put('/{id}/update', 'PostsController@update')->name('feeds.update'); 
    Route::delete('/{slug}/delete', 'PostsController@destroy')->name('feeds.delete'); 
}); 
///////////////////////

//////////////////////

Route::prefix('/comment')->namespace('comment')->middleware('auth')->group(function () {   
    Route::post('/comment', 'CommentsController@store')->name('comments.store');
    Route::get('/{id}/edit', 'CommentsController@edit')->name('comments.edit');
    Route::put('/{id}/update', 'CommentsController@update')->name('comments.update');
    Route::delete('/{id}/delete', 'CommentsController@destroy')->name('comments.delete');

});

/////////////////////
Route::prefix('/like')->namespace('like')->middleware('auth')->group(function () {   
    Route::post('/like', 'LikesController@store')->name('likes.store'); 
});
/////////////////////
Route::prefix('/dislike')->namespace('dislike')->middleware('auth')->group(function () {   
    Route::post('/dislike', 'DislikesController@store')->name('dislikes.store'); 
});
/////////////////////



/////////////////////friends
Route::prefix('/friends')->namespace('friend')->middleware('auth')->group(function () {
    Route::get('/', 'FriendsController@index')->name('friends.index');  
    Route::post('/','FriendsController@confirm')->name('friends.confirm');
});
////////////////////


////////////////////pictures
Route::prefix('/pictures')->namespace('picture')->middleware('auth')->group(function () {
    Route::get('/', 'PicturesController@index')->name('pictures');
    Route::post('/', 'PicturesController@store')->name('pictures.store');
    Route::delete('/{id}/delete', 'PicturesController@destroy')->name('pictures.delete');
});
///////////////////

////////////////////settings
Route::prefix('/settings')->namespace('setting')->middleware('auth')->group(function () {
    Route::get('/', 'SettingsController@index')->name('settings');
    Route::put('/', 'SettingsController@update')->name('settings.update');
    Route::put('/profile', 'SettingsController@profile')->name('settings.profile');
    
});
///////////////////

//////////////////// messages
Route::prefix('/messages')->namespace('message')->middleware('auth')->group(function () {
    Route::get('/', 'MessagesController@index')->name('messages');
    Route::post('/', 'MessagesController@store')->name('messages.store');
    Route::get('/{user:username}', 'MessagesController@message')->name('messages.user');
       
});

/////////////////// users
Route::prefix('/user')->namespace('user')->middleware('auth')->group(function () {  
    Route::get('/index', 'UsersController@users')->name('friends.user');    
    Route::post('/add','UsersController@add')->name('friends.add');     
});
//////////////////

