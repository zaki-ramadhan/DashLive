<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;


class Users extends Component
{
    use WithFileUploads;
    #[Validate('required|string|min:3|max:50')]
    public $name = '';

    #[Validate('required|email:dns|unique:users')]
    public $email = '';

    #[Validate('required|string|min:4|max:50')]
    public $password = 'password';

    #[Validate('image|max:5000')]
    public $avatar;

    public function createNewUser()
    {
        $validated = $this->validate();

        if (isset($validated['avatar'])) {
            $validated['avatar'] = $this->avatar->store('avatars', 'public');
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => now(),
            'password' => $this->password ? Hash::make($this->password) : Hash::make('password'),
            'remember_token' => Str::random(10),
            'avatar' => $validated['avatar'] ?? null,
        ]);

        // Reset semua field setelah membuat user baru
        $this->reset();

        // send message to session (notification)
        session()->flash('message', 'User successfully created.');
    }
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all()
        ]);
    }
}
