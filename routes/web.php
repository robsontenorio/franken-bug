<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    // Creates a random user and returns it
    $user =  User::factory()->create();

    return view('test', ['user' => $user]);
});
