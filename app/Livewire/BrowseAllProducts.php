<?php

namespace App\Livewire;

use Livewire\Component;

class BrowseAllProducts extends Component
{

     public $products = [
        [
            'name' => 'Wireless Headphones',
            'price' => 89.99,
            'image' => 'https://via.placeholder.com/300x300?text=Headphones',
        ],
        [
            'name' => 'Smartwatch Pro',
            'price' => 129.99,
            'image' => 'https://via.placeholder.com/300x300?text=Smartwatch',
        ],
        [
            'name' => 'Bluetooth Speaker',
            'price' => 49.99,
            'image' => 'https://via.placeholder.com/300x300?text=Speaker',
        ],
        [
            'name' => 'Gaming Mouse',
            'price' => 39.99,
            'image' => 'https://via.placeholder.com/300x300?text=Mouse',
        ],
        [
            'name' => 'Laptop Stand',
            'price' => 24.99,
            'image' => 'https://via.placeholder.com/300x300?text=Stand',
        ],
        [
            'name' => 'Minimalist Backpack',
            'price' => 59.99,
            'image' => 'https://via.placeholder.com/300x300?text=Backpack',
        ],
    ];
    public function render()
    {
        return view('livewire.browse-all-products')->extends('layouts.app');
    }
}
