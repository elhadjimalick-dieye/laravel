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
    Route::delete('services/massDestroy', 'ServiceController@massDestroy')->name('services.massDestroy');

    Route::resource('services','ServiceController');
    Route::resource('collecterecuplasts','CollectRecuplast');
    Route::resource('collectes','EntrepriseController');
    Route::resource('employes','employeController', [
        'anyData'  => 'employes.index',
        'getIndex' => 'employes',
    ]);
    Route::delete('employes/massDestroy', 'employeController@massDestroy')->name('employes.massDestroy');

    Route::resource('fournisseurs','Fournisseurss');
    Route::delete('fournisseurs/Destroy', 'Fournisseurss@Destroy')->name('fournisseurs.Destroy');

    Route::resource('payementrecuplasts','payementrecuplast');
    Route::resource('depotCollectes','DepotCollectes');
    Route::resource('depotProductions','DepotProductionController');
    Route::resource('triages','TriageController');

    







    Route::get('/', 'HomeController@index')->name('simple');

    Route::get('/row-details', 'HomeController@getRowDetails')->name('row_details');
    
    Route::get('/master-details', 'HomeController@getMasterDetails')->name('master_details');
    
    Route::get('/column_search', 'HomeController@getColumnSearch')->name('column_search');
    
    Route::get('/row-attributes', 'HomeController@getRowAttributes')->name('row_attributes');
    
    Route::get('/carbon', 'HomeController@getCarbon')->name('carbon');




    




    
    

    

    
});
