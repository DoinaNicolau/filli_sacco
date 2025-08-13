<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Rotte Pubbliche (Sito Vetrina)
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Rotte per gli articoli
Route::get('/create/article', [ArticleController::class, 'createArticle'])->name('create-article');
// Route::get('/blog', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/blog/{article}', [ArticleController::class, 'show'])->name('articles.show');
