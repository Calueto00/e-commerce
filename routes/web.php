<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProdutController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('produtos',ProdutController::class);

Route::get('/',[SiteController::class,'index'])->name('site.index');
Route::get('/produto/{slug}',[SiteController::class,'details'])->name('details');
Route::get('/categoria/{id}',[SiteController::class,'category'])->name('site.category');


