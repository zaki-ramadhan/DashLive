<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    public $name = '';
    public $email = '';
    public $password = 'password';

    public function createNewUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => $this->password ? Hash::make($this->password) : Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Reset semua field setelah membuat user baru
        $this->reset();
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all()
        ]);
    }
}
