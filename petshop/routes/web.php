<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{any}', function () {
//     return view('app');
// })->where('any', '.*');

// Route::get('/', function () {
//     return view('app');
// });

// Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('app'); // carrega a tela do Vue
});