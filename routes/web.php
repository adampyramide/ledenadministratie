<?php

use App\Http\Controllers\FamilieController;
use App\Http\Controllers\FamilielidController;
use App\Http\Controllers\SoortLidController;
use App\Http\Controllers\ContributieController;
use App\Http\Controllers\BoekjaarController;

// Homepagina (optioneel)
Route::get('/', function () {
    return redirect('/families');
});

// CRUD routes (resource = alle standaard CRUD operaties)
Route::resource('families', FamilieController::class);
Route::resource('familieleden', FamilielidController::class);
Route::resource('soortenleden', SoortLidController::class);
Route::resource('contributies', ContributieController::class);
Route::resource('boekjaren', BoekjaarController::class);
