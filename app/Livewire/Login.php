<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $authenticated = Auth::attempt($credentials, true);

        if ($authenticated) {
            $this->redirect('/', true);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
