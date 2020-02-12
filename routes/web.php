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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/collecterecuplasts','CollectRecuplast')->name('paye');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('services','ServiceController');
    Route::resource('collecterecuplasts','CollectRecuplast');
    Route::resource('collectes','EntrepriseController');
    Route::resource('employes','employeController');
    Route::resource('fournisseurs','Fournisseurss');
    Route::resource('payementrecuplasts','payementrecuplast');
    Route::resource('depotCollectes','DepotCollectes');
    Route::resource('depotProductions','DepotProductionController');
    Route::resource('triages','TriageController');


    

    Route::resource('compteFournisseurs','CompteFournisseurController');



    
    

    

    
});
