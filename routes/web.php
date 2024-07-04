<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestUsers;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TestUsers::class)->group(function() {
    Route::get('/users', 'users')->name('users');
});