<?php

use App\Livewire\BrowseAllProducts;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class)->name('home');

Route::get('/products', BrowseAllProducts::class)->name('products.index');
