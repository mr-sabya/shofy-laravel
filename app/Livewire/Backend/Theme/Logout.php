<?php

namespace App\Livewire\Backend\Theme;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return $this->redirect(route('admin.login'), navigate:true); // Or your desired route
    }
    
    public function render()
    {
        return view('livewire.backend.theme.logout');
    }
}
