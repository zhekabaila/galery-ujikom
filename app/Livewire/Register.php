<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    public string $nama_lengkap = '';
    public string $alamat = '';

    public function register() {

        $this->validate([
            'username' => 'required|string|unique:user,username',
            'email' => 'required|string|unique:user,email',
            'nama_lengkap' => 'required|string',
            'alamat' => 'required|string',
            'password' => 'required|confirmed',
        ]);

        $isSuccess = User::create([
            'username' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'nama_lengkap' => $this->nama_lengkap,
            'alamat' => $this->alamat,
        ]);


        if ($isSuccess) {
            Auth::attempt([
                'email' => $this->email,
                'password' => $this->password,
            ]);

            $this->redirect('/', true);
        }
    }

    public function render()
    {
        return view('livewire.register');
    }
}
