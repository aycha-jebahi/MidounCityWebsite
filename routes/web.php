<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/carte', function () {
    return view('frameCarte');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/like', function () {
    return view('index2');
});


Route::get('/languageDemo', function () {
    return view('languageDemo');
});

Route::get('/jerba', function () {
    return view('jerba');
});

Route::get('/patrimoine2', function () {
    return view('patrimoine2');
});

Route:: group(['prefix' => LaravelLocalization::setLocale(),
'middleware'=>[ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function(){
    Route:: get( "jerba2", function() {
        return view("jerba");
    } );
});

Route::get('/','CategorieController@index')->name('categories');


Route::get('/sous','SousCategorieController@index')->name('souscategories');

Route::get('/par','PartenaireController@index')->name('partenaires');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*Begin Mes controllers*/
//traduction
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

// afficher les posts
Route::get('/evenement','EvenementController@index2');

//envoyer les requetes like et dislike
Route::post('/like','EvenementController@like')->name('evenements.like');

Route::get('/redirect/{service}','SocialController@redirect');
Route::get('/callback/{service}','SocialController@callback');

/*End Mes controllers*/

Route::prefix('partenaire')->group(function () {
    // Dashboard route
    Route::get('/', 'PartenaireController@index')->name('partenaire.dashboard');

    // Login routes
    Route::get('/login', 'Auth\PartenaireLoginController@showLoginForm')->name('partenaire.login');
    Route::post('/login', 'Auth\PartenaireLoginController@login')->name('partenaire.login.submit');

    // Logout route
    Route::post('/logout', 'Auth\PartenaireLoginController@logout')->name('partenaire.logout');

    // Register routes
    Route::get('/register', 'Auth\PartenaireRegisterController@showRegistrationForm')->name('partenaire.register');
    Route::post('/register', 'Auth\PartenaireRegisterController@register')->name('partenaire.register.submit');

    // Password reset routes
    Route::get('/password/reset', 'Auth\PartenaireForgotPasswordController@showLinkRequestForm')->name('partenaire.password.request');
    Route::post('/password/email', 'Auth\PartenaireForgotPasswordController@sendResetLinkEmail')->name('partenaire.password.email');
    Route::get('/password/reset/{token}', 'Auth\PartenaireResetPasswordController@showResetForm')->name('partenaire.password.reset');
    Route::post('/password/reset', 'Auth\PartenaireResetPasswordController@reset')->name('partenaire.password.update');
});
