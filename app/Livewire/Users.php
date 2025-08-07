<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;


class Users extends Component
{
    
    public function render()
    {
        // lakukan pencarian berdasarkan query sebelum render
        return view('livewire.users', [
            'users' => User::latest()
                ->where('name', 'like', "%{$this->searchQuery}%")
                ->paginate(6)
        ]);
    }
}
