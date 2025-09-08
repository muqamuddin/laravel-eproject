<?php 
namespace App\Livewire\Component;

use Livewire\Component;

class Brand extends Component
{
    public function render()
    {
        $brands = [
            [
                'name' => 'Apple',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg',
                'description' => 'محصولات با کیفیت بالا از برند اپل.',
            ],
            [
                'name' => 'Samsung',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg',
                'description' => 'جدیدترین تکنولوژی‌های سامسونگ.',
            ],
            [
                'name' => 'Xiaomi',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/29/Xiaomi_logo.svg',
                'description' => 'برند اقتصادی با قابلیت‌های عالی.',
            ],
            [
                'name' => 'Sony',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/20/Sony_Logo.svg',
                'description' => 'صدا و تصویر حرفه‌ای با برند سونی.',
            ],
        ];

        return view('livewire.component.brand', compact('brands'))->extends('layouts.app');
    }
}
