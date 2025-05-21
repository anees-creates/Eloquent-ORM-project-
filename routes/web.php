<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserCommentController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('users', UserController::class);
Route::resource('users.comments',UserCommentController::class)->shallow();