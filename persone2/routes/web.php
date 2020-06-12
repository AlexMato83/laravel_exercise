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
    return view('welcome');
})->name("welcome");

Route::get('/maschiacci', function () {
    $allMembers = config("persone");
    $maschi = [];
    foreach ($allMembers as $member) {
      if ($member["gender"] === "M") {
        $maschi[] = $member;
      }
    }
    return view('maschi', compact("maschi"));
})->name("maschi");

Route::get('/ibridi', function () {
    $allMembers = config("persone");
    return view('ibridi', compact("allMembers"));
})->name("ibridi");



Route::get('/femmine', function () {
  $allMembers = config("persone");
  $femmine = [];

  foreach ($allMembers as $member) {
    if ($member["gender"] === "F") {

      $femmine[] = $member;
    }
  }
    return view('femmine', compact("femmine") );
})->name("femmine");
