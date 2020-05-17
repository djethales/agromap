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


Route::get('/', function () {
    
    return view('welcome');
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','ContactsController@index')->name('contact');
Route::post('/contact','ContactsController@store')->name('contact');
Route::view('/a-propos','a-propos-de-nous')->name('a-propos');

//les routes concernant la page service
Route::get('/Services','ServicesController@index')->name('services.index');
Route::get('/Services/{name}','ServicesController@show')->name('service.show');

//les routes concernant la page Projets
Route::get('/Projets','ProjetsController@index')->name('projets.index');
Route::get('/Projets/{name}','ProjetsController@show')->name('projets.show');

//les routes concernant la page filière
Route::get('/Filieres','FilieresController@index')->name('filieres.index');
Route::get('/Filieres/{name}','FilieriesController@show')->name('filieres.show');


Route::view('/services-agriculture-durable','agriculture-durable')->name('agriculture.durable');
Route::view('/services-foresterie-environnement','foresterie-environnement')->name('foresterie.environnement');
Route::view('/services-geomatique','geomatique')->name('geomatique');
Route::view('/services-digitalisation-agricole','digitalisation-agricole')->name('digitalisation.agricole');
Route::view('/nos-fillieres','fillieres')->name('nos-fillieres');
Route::view('/nos-projets','projets')->name('nos-projets');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {    
    Route::resource('users', 'UsersController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('posts', 'PostsController');
    Route::resource('roles', 'RolesController');
    
});