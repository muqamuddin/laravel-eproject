<?php

use App\Livewire\BrowseAllProducts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', BrowseAllProducts::class)->name('products.index');
