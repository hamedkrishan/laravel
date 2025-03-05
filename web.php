<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\task1Controller;
use App\Http\Controllers\task9Controller;
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
//task 1

// Route::get('/', function () {
//     return 'Hello, World!';
// });
//task 2

// Route::get('/user/{name}', function ($name) {
//     return 'Hello ' . $name;
// });
//task 3

// Route::get('/user/{age}', function ($age ="Age not provided." ) {
//     return 'You are ' . $age . ' years old';
// });
//task 4


//  Route::get('/user', [task1Controller::class , "index"] );
//task 5
//
// Route::get('/dashboard', function () {
//     return 'Dashboard Page';
// })->name('dashboard');

//task 6 missing
// Route::prefix('main')->group(function () {
//     Route::get('/local', function () {
//         return "Main local Page";
//     });

//     Route::get('/users', function () {
//         return "Main Users Page";
//     });
// });

//task 7 missing

// Route::get('/user/{id}', function ($id) {
//     return "User ID: $id";
// });

//task 8
//  Route::fallback(function () {
//     return 'Page not found.';
// });



//task 9

//  Route::Resource('/user', task9Controller::class);

//task 10

// Route::get('/user/{category}/{id}', function ($category, $id) {
//     return "category: $category, ID: $id";
// });


//task 11

// Route::get('/blog/{page}', function ($page = 1) {
//     return "view page $page";
// });

//task 12

// Route::redirect('/home', '/welcome');

//task 13
// Route::get('/', function () {
//     return view('welcome');
// });

//####################################################
//####################################################


// Route::get('/dash', function () {
//     return view('layout.dashboard');
// });
// Route::get('/sen', function () {
//     return view('layout.sectione');
// });