<?php

namespace App\Livewire;

use Livewire\Component;

class DailyDiscouver extends Component
{

    public $products = [
        [
            'name' => 'هدفون بی‌سیم',
            'category' => 'الکترونیک',
            'price' => 59.99,
            'image' => 'https://via.placeholder.com/200x200?text=Earbuds',
        ],
        [
            'name' => 'کوله‌پشتی شیک',
            'category' => 'لوازم جانبی',
            'price' => 39.99,
            'image' => 'https://via.placeholder.com/200x200?text=Backpack',
        ],
        [
            'name' => 'کفش دویدن',
            'category' => 'کفش',
            'price' => 89.99,
            'image' => 'https://via.placeholder.com/200x200?text=Shoes',
        ],
        [
            'name' => 'ساعت هوشمند',
            'category' => 'پوشیدنی',
            'price' => 129.99,
            'image' => 'https://via.placeholder.com/200x200?text=Watch',
        ],
    ];

    public function render()
    {
        return view('livewire.daily-discouver');
    }
}
