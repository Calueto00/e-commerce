<?php

use App\Http\Controllers\ProdutController;
use Illuminate\Support\Facades\Route;


Route::resource('/',ProdutController::class);

