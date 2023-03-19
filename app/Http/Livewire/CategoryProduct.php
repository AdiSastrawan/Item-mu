<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryProduct extends Component
{
    public $category;
    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {

        return view('livewire.components.category-product.category-product');
    }
}
