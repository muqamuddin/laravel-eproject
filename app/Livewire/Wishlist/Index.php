<?php

namespace App\Livewire\Wishlist;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.wishlist.index')->extends('layouts.app')->title('لیست علاقه‌مندی‌ها');;
    }
}
