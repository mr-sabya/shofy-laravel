<?php

namespace App\Livewire\Frontend\Home;

use Livewire\Component;

class Index extends Component
{
    public $square = false;

    public function render()
    {
        return view('livewire.frontend.home.index');
    }
}
