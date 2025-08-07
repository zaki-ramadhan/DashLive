<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class UsersList extends Component
{
    use WithPagination;
    public $searchQuery = '';

    #[On('user-created')] // untuk mendengar event yang di dispatch dari komponen user register form
    public function updatedSearchQuery()
    { // spesifikasikan penamaan method ini untuk menangani perubahan pada searchQuery saja, tidak satu halaman full
        $this->resetPage(); // Reset pagination when searching
    }

    public function search()
    {
        $this->resetPage();
    }

    // template skeleton loading component nya
    public function placeholder()
    {
        return view('livewire.placeholders.users-list-skeleton');
    }

    public function render()
    {
        sleep(3);
        return view('livewire.users-list', [
            'users' => User::latest()
                ->where('name', 'like', "%{$this->searchQuery}%")
                ->paginate(6)
        ]);
    }
}
