<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TvController;

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{id}', [ActorsController::class, 'index'])->name('movies.actors.pagination');

Route::get('/actors/{actor}', [ActorsController::class, 'show'])->name('actors.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{id}', [TvController::class, 'show'])->name('tv.show');