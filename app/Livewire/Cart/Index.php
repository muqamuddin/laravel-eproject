<?php

namespace App\Livewire\Cart;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.cart.index')->extends('layouts.app')->title('سبد خرید');;
    }
}
