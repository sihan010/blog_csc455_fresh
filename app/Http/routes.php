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

Route::group(['middlewareGroups' => ['web']], function () {
	//comment
	Route::post('comment/{post_id}',['uses'=>'CommentController@store','as'=>'comment.store']);

	Route::get('category/CS', 'CategoriesController@getCS');
	Route::get('category/Physics', 'CategoriesController@getPhysics');
	Route::get('category/Astronomy', 'CategoriesController@getAstro');
	Route::get('category/Literature', 'CategoriesController@getLit');
	Route::get('category/Music_Movie', 'CategoriesController@getMM');
	Route::get('category/Miscellanious', 'CategoriesController@getMisc');


    Route::get('profile',['uses'=>'PagesController@getProfile','as'=>'profile']);
	//Route::get('login','Auth\LoginController@showLoginForm');

	Route::get('auth/login','Auth\AuthController@getLogin');
	Route::post('auth/login','Auth\AuthController@postLogin');
	Route::get('auth/logout','Auth\AuthController@getLogout');

	Route::get('password/reset/{token?}','Auth\PasswordController@showResetForm');
	Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset','Auth\PasswordController@reset');

	Route::get('auth/register','Auth\AuthController@getRegister');
	Route::post('auth/register','Auth\AuthController@postRegister');

	Route::get('idea/{slug}',['uses'=>'PublicController@getIdea','as'=>'idea.show'])->where('slug','[\w\d\-\_]+');
	Route::get('idea',['uses'=>'PublicController@getIndex','as'=>'idea']);
	Route::get('/', 'PagesController@getIndex');
	Route::get('about', 'PagesController@getAbout');
	Route::get('contact', 'PagesController@getContact');
	Route::resource('tags', 'TagController',['except'=>['create']]);
	Route::resource('posts', 'PostsController');
});

