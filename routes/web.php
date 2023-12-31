<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*--------PAGE D'ACCUEIL-----------*/

Route::view('/', 'welcome')->name('welcome');

/* * * * * OU: * * * * * * * * * * * *
 Route::get('/', function () {
    return view('welcome');
});
* * * * * * * * * * * * * * * * * * */



/*--------CLASS CAR & METHODES----------*/

//Affiche la liste des voitures:
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

//Affiche les détails d'une voiture:
Route::get('/cars/{car}', [CarController::class, 'show'])->name('car.show');

//Page de création d'une nouvelle voiture
Route::get('/cars.create', [CarController::class, 'create'])->name('car.create'); /*-Retourne une vue-*/

//Traitement de la création d'une voiture via la méthode POST
Route::post('/cars', [CarController::class, 'store'])->name('car.store');





/*-------------------------------------------------*/

// Modification d'une voiture spécifique - METHODE GET (affichage du formulaire)
Route::get('/cars/update/{car}', [CarController::class, 'edit'])->name('car.edit');

// Mise à jour d'une voiture spécifique - METHODE POST (traitement de la modification)
Route::post('/cars/update/{car}', [CarController::class, 'update'])->name('car.update');

/*-------------------------------------------------*/





//Supprimer une voiture
Route::delete('cars/{car}', [CarController::class, 'destroy'])->name('car.destroy');

/*--------DASHBOARD----------*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
