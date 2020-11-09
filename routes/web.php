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
    Route::resource('lavageshors','LavageController');
    Route::resource('lavages','LavageControllers2');
    Route::resource('sechages','SechageController');
    Route::resource('extrusions','ExtrusionController');

    Route::resource('sacs','SacController');
    Route::resource('stockproduitfinis','StockController');
    Route::resource('sortiepourventes','StockdeuxController');

    Route::resource('ventes','VenteController');
    Route::resource('clients','ClientsController');
    Route::resource('achats','AchatsController');

    

    
    Route::resource('broyages','BroyageController');
    Route::resource('tamisages','TamisageController');




    









    




    
    

    

    
});
