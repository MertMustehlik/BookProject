<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Author\AuthorController;
use App\Http\Controllers\Admin\Publisher\PublisherController;
use App\Http\Controllers\Admin\Book\BookController;

Route::get('/', function () {
    return view('front.temp');
});

Route::group(['prefix' => 'adminpanel', 'as' => 'adminpanel-'], function(){
    Route::get('/', [IndexController::class, 'index'])->name('index');
    
    Route::group(['prefix' => 'yazarlar', 'as' => 'author-'], function(){
        Route::get('/', [AuthorController::class, 'index'])->name('index');
        Route::get('/ekle', [AuthorController::class, 'add'])->name('add');
        Route::post('/ekle-post', [AuthorController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [AuthorController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [AuthorController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [AuthorController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'yayinevi', 'as' => 'publisher-'], function(){
        Route::get('/', [PublisherController::class, 'index'])->name('index');
        Route::get('/ekle', [PublisherController::class, 'add'])->name('add');
        Route::post('/ekle-post', [PublisherController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [PublisherController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [PublisherController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [PublisherController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'kitaplar', 'as' => 'book-'], function(){
        Route::get('/', [BookController::class, 'index'])->name('index');
        Route::get('/ekle', [BookController::class, 'add'])->name('add');
        Route::post('/ekle-post', [BookController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [BookController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [BookController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [BookController::class, 'delete'])->name('delete');
    });

});