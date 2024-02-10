<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('pages.index');
});
use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'DatiComics']);
Route::get('/', [Controller::class, 'ListaLink']);