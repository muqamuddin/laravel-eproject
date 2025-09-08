<?php

namespace App\Livewire\Component;

use Livewire\Component;

class CategoryList extends Component
{

     public array $categories = [
        ['id' => 1, 'name' => 'Technology', 'image' => 'images/categories/technology.jpg'],
        ['id' => 2, 'name' => 'Design', 'image' => 'images/categories/design.jpg'],
        ['id' => 3, 'name' => 'Marketing', 'image' => 'images/categories/marketing.jpg'],
        ['id' => 4, 'name' => 'Finance', 'image' => 'images/categories/finance.jpg'],
        ['id' => 5, 'name' => 'Education', 'image' => 'images/categories/education.jpg'],
    ];
    public function render()
    {
        return view('livewire.component.category-list')->extends('layouts.app');
    }
}
