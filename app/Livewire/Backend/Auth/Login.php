<?php

namespace App\Livewire\Backend\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@$!%*#?&]).*$/',
    ];

    public function login()
    {
        $this->validate();

        // Check if user is admin and credentials are correct
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'is_admin' => 1])) {
            session()->regenerate();
            return $this->redirect(route('dashboard'), navigate:true); // change this to your admin dashboard route
        }

        $this->addError('email', 'Invalid credentials or not an admin.');
    }
    
    public function render()
    {
        return view('livewire.backend.auth.login');
    }
}
