<?php

use App\Livewire\BrowseAllProducts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/allproduct', BrowseAllProducts::class)->name('allproducts');
