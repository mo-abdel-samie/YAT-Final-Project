<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'/','namespace'=>'FrontEnd'],function(){
    Route::get('', 'HomePageControler@index')->name('front.home');

    Route::post('contact', 'ContactController@store')->name('contact.form');
});


/*
--------------------------------------------------------------------------
    Admin Routes
--------------------------------------------------------------------------
*/
Auth::routes();

Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'],function(){

    Route::get('/', 'HomeController@index')->name('home');


    /*========================{ Get Route For Admin Navigation }====================*/

    Route::get('/dashboard',function() {
        return view('admin.index');
    })->name('dashboard');


    /*========================{ Experiance Routes }====================*/

    Route::get('/experiance','ExperianceController@getExperiance')->name('experiance');
    Route::post('/create-experiance','ExperianceController@addexperiance')->name('add.experience');
    Route::get('/delete-experiance/{id}','ExperianceController@deleteExperiance');
    Route::post('/edit-experiance/{id}','ExperianceController@editExperiance');

    /*========================{ Skills Routes }====================*/

    Route::get('/skills','SkillsControler@getSkill')->name('skills');
    Route::post('/create-skill','SkillsControler@addSkill')->name('add.skills');
    Route::get('/delete-skill/{id}','SkillsControler@deleteSkill');
    Route::post('/edit-skill/{id}','SkillsControler@editSkill');

    /*========================{ Profile Routes }====================*/

    Route::get('/profile','ProfileController@getProfile')->name('profile');
    Route::post('/create-profile','ProfileController@createProfile')->name('create.profile');
    Route::post('/edit-profile','ProfileController@editProfile');


});


/*========================{ Dashboard Routes }====================*/



/*========================{ Seting Routes }====================*/



/*========================{ Login Auth Routes }====================*/

