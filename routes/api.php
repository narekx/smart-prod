<?php

use Illuminate\Support\Facades\Route;

Route::get("/", fn() => 1);

Route::resources([
    "books" => \App\Http\Controllers\RESTful\BookController::class,
    "authors" => \App\Http\Controllers\RESTful\AuthorController::class,
]);

