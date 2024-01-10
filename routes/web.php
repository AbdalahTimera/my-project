<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ActiviteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('liste-projets', [ProjetController::class, 'index'])->name('/liste-projets');
Route::get('supprimer/{id}', [ProjetController::class, 'supprimer_produit']);
Route::get('/ajouter', [ProjetController::class, 'ajouter_produit']);
Route::post('/ajouter/save', [ProjetController::class, 'ajouter_produit_save']);
Route::get('/modifier/{id}', [ProjetController::class, 'modifier_produit']);
Route::post('/modifier/save', [ProjetController::class, 'modifier_produit_save']);


Route::get('liste-activites', [ActiviteController::class, 'index'])->name('/liste-activites');
Route::get('/ajouteract', [ActiviteController::class, 'ajouter_activite']);
Route::post('/ajouteract/enregistrer', [ActiviteController::class, 'ajouter_enregistrer']);
Route::get('/modifieract/{id}', [ActiviteController::class, 'modifier_activite']);
Route::post('/modifieract/enregistrer', [ActiviteController::class, 'modifier_activite_enregistrer']);
Route::get('supprimeract/{id}', [ActiviteController::class, 'supprimer_activite']);




Route::get('liste-zones', [ZoneController::class, 'index'])->name('/liste-zones');
Route::get('/ajouterzone', [ZoneController::class, 'ajouter_zone']);
Route::post('/ajouterzone/enregistrer', [ZoneController::class, 'ajouter_enregistrer']);
Route::get('/modifierzone/{id}', [ZoneController::class, 'modifier_zone']);
Route::post('/modifierzone/enregistrer', [ZoneController::class, 'modifier_zone_nregistrer']);
Route::get('/supprimerzone/{id}', [ZoneController::class, 'supprimer_zone']);


