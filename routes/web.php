<?php

use  App\Http\Controllers\PageController;
use  App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController ::class, 'welcome' ])->name('welcome');

Route::get('/contacts', [ContactController ::class, 'viewForm' ])->name('contacts');
Route::post('/contacts/invia', [ContactController ::class, 'send' ])->name('contacts.send');

Route::get('/chi-sono', [PageController ::class, 'aboutMe' ])->name('about-me');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articoli/create', [ArticleController::class, 'create'])->name('articles.create');

Route::get('/articolo/{article}', [PageController::class, 'article'])->name('article');

Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

    Route::resource('/categories', CategoryController::class);

});