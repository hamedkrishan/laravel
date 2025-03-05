<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task1Controller;
use App\Http\Controllers\Task9Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Task 1: Simple "Hello, World!" response
Route::get('/', function () {
    return 'Hello, World!';
});

// Task 2: Dynamic user greeting
Route::get('/user/{name}', function ($name) {
    return 'Hello ' . $name;
});

// Task 3: Age parameter with a default value
Route::get('/user/age/{age?}', function ($age = "Age not provided.") {
    return 'You are ' . $age . ' years old';
});

// Task 4: Controller-based route
Route::get('/user', [Task1Controller::class, 'index']);

// Task 5: Named route for the dashboard
Route::get('/dashboard', function () {
    return 'Dashboard Page';
})->name('dashboard');

// Task 6: Route group with prefix
Route::prefix('main')->group(function () {
    Route::get('/local', function () {
        return "Main local Page";
    });

    Route::get('/users', function () {
        return "Main Users Page";
    });
});

// Task 7: Display user ID dynamically
Route::get('/user/id/{id}', function ($id) {
    return "User ID: $id";
});

// Task 8: Fallback route for undefined routes
Route::fallback(function () {
    return 'Page not found.';
});

// Task 9: Resource controller for user
Route::resource('/user', Task9Controller::class);

// Task 10: Route with multiple parameters
Route::get('/user/{category}/{id}', function ($category, $id) {
    return "Category: $category, ID: $id";
});

// Task 11: Blog pagination with a default page
Route::get('/blog/{page?}', function ($page = 1) {
    return "View page $page";
});

// Task 12: Redirect from /home to /welcome
Route::redirect('/home', '/welcome');

// Task 13: Load views for dashboard and section
Route::get('/main_dashboard', function () {
    return view('layout.main_dashboard');
});
Route::get('/main_section', function () {
    return view('layout.main_section');
});
