<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/captec-loan-calculator',[Master::class,'capitec']);