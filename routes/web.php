<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/operacion/{num1}/{num2}', function (int $num1, int $num2) {
    return view('operacion', ['num1' => $num1, 'num2' => $num2]);
})->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/saludo/{firstName}/{lastName?}', function (string $firstName, string $lastName = null) {
    return view('saludo', ['firstName' => $firstName, 'lastName' => $lastName]);
})->whereAlpha('firstName')->whereAlpha('lastName');

Route::get('/visitante/{firstName}', function (string $firstName) {
    return view('visitante', ['firstName' => $firstName]);
})->whereAlpha('firstName');

Route::get('/hello/{firstName}', [VisitorController::class, 'index'])->whereAlpha('firstName');

