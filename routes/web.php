<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\SuiviController;


// Route::get('/', function () {
//     return view('welcome');
// }); 
Route::get('/', function () {
    return view('auth.login');
});


Route::get('/tutorat/dashboard', [AdminController::class, 'home'])->name('dashboard.home')->middleware('auth');
Route::get('/etudiant/profile', [AdminController::class, 'profile'])->name('etudiant.profile')->middleware('auth');
Route::get('/tutorat/poster-un-document', [AdminController::class, 'index'])->name('doc.index')->middleware('auth');


//GESTION DE LA LISTE DES ETUDIANTS
Route::get('/etudiant/licence1/liste', [EtudiantController::class, 'listeL1'])->name('licence1.liste')->middleware('auth');
Route::get('/etudiant/licence2/liste', [EtudiantController::class, 'listeL2'])->name('licence2.liste')->middleware('auth');
Route::get('/etudiant/licence3/liste', [EtudiantController::class, 'listeL3'])->name('licence3.liste')->middleware('auth');

//GESTION DES CLASSES VIRTUELLES
Route::get('/classe/evaluer', [ClasseController::class, 'note'])->name('classe.note')->middleware('auth');
Route::get('/classe/programmer', [ClasseController::class, 'programmer'])->name('classe.programmer')->middleware('auth');
Route::get('/classe/encours', [ClasseController::class, 'encours'])->name('classe.encours')->middleware('auth');
Route::get('/classe/terminer', [ClasseController::class, 'terminer'])->name('classe.terminer')->middleware('auth');

//SUIVIS DES ETUDIANTS
Route::get('/etudiants/suivis', [SuiviController::class, 'progression'])->name('etudiant.progression')->middleware('auth');
