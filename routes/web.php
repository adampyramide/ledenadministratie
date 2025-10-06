<?php

use App\Http\Controllers\FamilieController;
use App\Http\Controllers\FamilielidController;
use App\Http\Controllers\SoortLidController;
use App\Http\Controllers\ContributieController;
use App\Http\Controllers\BoekjaarController;

// Homepagina
Route::get('/', function () {
    return redirect('/families');
});

// CRUD routes
Route::resource('families', FamilieController::class);

Route::resource('familieleden', FamilielidController::class)
    ->parameters(['familieleden' => 'familielid']);

Route::resource('soorten_leden', SoortLidController::class)
    ->parameters(['soorten_leden' => 'soort']);

Route::resource('contributies', ContributieController::class)
    ->parameters(['contributies' => 'contributie']); // Het enkelvoud instellen omdat anders hij het op
                                                                // Contributy (ivm met Engels) zet wat niet klopt
Route::resource('boekjaren', BoekjaarController::class);
