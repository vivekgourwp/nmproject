<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/admin-dashboard', function () {
    return view('/admin/index');
});

Route::get('/admin-dashboard/users', function () {
    return view('/admin/users');
});
