<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;

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

// Route::get('/', function () {
//     return view('home', [
//         'name' => 'Muhammad Sholehhudin',
//         'usia' => 28
//     ]);
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/blogs', function () {
//     return view('blogs');
// });

Route::resource('employee', employeesController::class);
