<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\Book\FrontBookController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Author\AuthorController;
use App\Http\Controllers\Admin\Publisher\PublisherController;
use App\Http\Controllers\Admin\Book\BookController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Slider\SliderController;

/* auth */
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
/* auth end */

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/kitap/detay/{seflink}', [FrontBookController::class, 'index'])->name('book-detail');

Route::group(['prefix' => 'adminpanel', 'as' => 'adminpanel-'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    
    Route::group(['prefix' => 'yazarlar', 'as' => 'author-'], function(){
        Route::get('/', [AuthorController::class, 'index'])->name('index');
        Route::get('/ekle', [AuthorController::class, 'add'])->name('add');
        Route::post('/ekle-post', [AuthorController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [AuthorController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [AuthorController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [AuthorController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'yayinevleri', 'as' => 'publisher-'], function(){
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

    Route::group(['prefix' => 'kategoriler', 'as' => 'category-'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/ekle', [CategoryController::class, 'add'])->name('add');
        Route::post('/ekle-post', [CategoryController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [CategoryController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [CategoryController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => 'slider', 'as' => 'slider-'], function(){
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('/ekle', [SliderController::class, 'add'])->name('add');
        Route::post('/ekle-post', [SliderController::class, 'addPost'])->name('addPost');
        Route::get('/duzenle/{id}', [SliderController::class, 'update'])->name('update');
        Route::post('/duzenle-post/{id}', [SliderController::class, 'updatePost'])->name('updatePost');
        Route::get('/sil/{id}', [SliderController::class, 'delete'])->name('delete');
    });
});


/* auth */
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
/* auth end */