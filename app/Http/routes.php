<?php
use App\Mega;
use App\User;
use App\Role;
use App\Country;
use App\Post;
use App\tats;
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





Route :: get('/',function(){

    return view('start_page');
});







Route::resource('/posts','Posts_controller');





















