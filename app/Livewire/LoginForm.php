<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginForm extends Component
{
    public $name, $password ;
    public function LoginHandler()
    {
        $this->validate([
            'name' => 'required|exists:users,name',
            'password' => 'required|min:5'
        ], [
            'name.exists' => 'Nama Tidak Terdaftar',
            'name.required' => 'Nama Tidak Boleh Kosong',
            'password.min' => 'Password Minimal 5 Karakter',
        ]);

        $creds = [
            'name' => $this->name,
            'password' => $this->password
        ];

        if (Auth::guard('web')->attempt($creds)) {
            $user = Auth::user();
            
            if ($user->type == 1) {

                return redirect()->route('mahasiswa')->with('success', 'Login Berhasil');
            } elseif ($user->type == 2) {
                session(['user' => $user]);
                return redirect()->route('profile')->with('success', 'Login Berhasil');
                
            } else {
                dd('Login Gagal');
            }
        } else {
            return redirect()->route('login')->with('error', 'Login Gagal');
            
        }
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
