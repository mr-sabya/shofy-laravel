<?php

namespace App\Livewire\Frontend\Components\Ad;

use Livewire\Component;

class Banner1 extends Component
{
    public $square = true;
    
    public function render()
    {
        return view('livewire.frontend.components.ad.banner1');
    }
}
