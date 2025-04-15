<?php

namespace App\Livewire\Frontend\Components\Product;

use Livewire\Component;

class Item1 extends Component
{
    public $className;


    public function mount($className){
        $this->className = $className;
    }

    public function render()
    {
        return view('livewire.frontend.components.product.item1');
    }
}
