<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class Users extends Component
{
    #[Validate('required|string|min:3|max:50')]
    public $name = '';

    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|string|min:4|max:50')]
    public $password = 'password';

    public function createNewUser()
    {
        // $validated = $this->validate([
        //     'name' => 'required|string|min:3|max:50',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|string|min:4',
        // ]);

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => $this->password ? Hash::make($this->password) : Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Reset semua field setelah membuat user baru
        $this->reset();

        // send message to session (notification)
        // ! tidak menggunakan session flash, karena menggunakan notyf by flyonui
        // session()->flash('status', 'User successfully updated.');
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all()
        ]);
    }
}
