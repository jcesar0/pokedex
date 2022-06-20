<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'v1',
], function () {
    Route::get('pokemon/{name}', [\App\Http\Controllers\v1\PokemonController::class, 'show']);
});
