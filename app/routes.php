<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//RESTful Controller
Route::controllers(array(
    'user'  =>'UserController',
    'about' => 'AboutController',
    'feed'  => 'FeedController' ,
    'price' => 'PriceController',
    'guestbook' => 'GuestbookController',
    'funny' => 'FunnyController',
    'blog'  => 'BlogController'
));
View::composer('layouts.content' , function ($view){
    $action_list        = Website::all();
    $friend_link_list   = FriendLink::all();
    $view->with('sidebar' , View::make('layouts.sidebar' ,compact('action_list' , 'friend_link_list')));
});

//set this end of route 
App::missing(function (){
	return Response::view('errors.404' , array() , 404);
});

