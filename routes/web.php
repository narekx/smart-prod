<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
Route::get('/', function () {
    return view('index');
})->name("home");

Route::prefix("admin")->as("admin.")->middleware(["auth", "admin"])->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard");

    Route::resources([
        "books" => \App\Http\Controllers\Admin\BookController::class,
        "authors" => \App\Http\Controllers\Admin\AuthorController::class,
    ]);
});

Route::resource("authors", \App\Http\Controllers\AuthorController::class)
    ->only(["index", "show"]);

require __DIR__.'/auth.php';
