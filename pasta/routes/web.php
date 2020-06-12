<?php

use Illuminate\Support\Facades\Route;

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
     $prova = "ciao amore";
     $prova2 = "saluti me?";
     $numberCycles = 10;
    return view("welcome", compact("prova","prova2","numberCycles"));
})->name("10cicli");

Route::get('/home20', function () {
     $prova = "ciao amore";
     $prova2 = "saluti me?";
     $numberCycles = 20;
    return view("welcome", compact("prova","prova2","numberCycles"));
})->name("20cicli");

Route::get('/pasta', function () {
      
      $pastaGenerica = config("pasta");
     return view("listaPasta", compact("pastaGenerica"));
})->name("pasta");

Route::get('/pastaLunga', function () {

      $pastaGenerica = config("pasta");
     return view("pastaLunga", compact("pastaGenerica"));
})->name("pastaLunga");
