<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


// Include admin dashboard route file
require_once __DIR__.'/admin/admin_route.php';


Route::get('/', function () {
    return view('nmindex', ['siteName' => 'My Laravel App']);
});

Route::get('/app', function () {
    return view('nmindex');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm']);

Route::post('/saveregister', [RegisterController::class, 'saveform']);



