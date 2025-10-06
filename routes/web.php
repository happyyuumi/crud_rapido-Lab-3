<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Cuando entres a "/", te manda directo al listado de productos
Route::get('/', fn () => redirect()->route('products.index'));

// Todas las rutas CRUD: /products, /products/create, /products/{id}, etc.
Route::resource('products', ProductController::class);
