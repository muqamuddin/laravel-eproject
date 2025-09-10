<?php

namespace App\Livewire\Component;

use Livewire\Component;

class WishlistCart extends Component
{

      public $count = 2; // static for now
    public function render()
    {
        return view('livewire.component.wishlist-cart');
    }
}
