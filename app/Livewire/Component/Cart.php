<?php

namespace App\Livewire\Component;

use Livewire\Component;

class Cart extends Component
{
    public $count = 4; // static for now
    public function render()
    {
        return view('livewire.component.cart');
    }
}
