<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Backend Operations
Route::prefix('backoffice')->name("backoffice.")->middleware(['auth','web'])->group(function () {

});
