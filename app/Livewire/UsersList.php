<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
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

    // computed property
    // agar menyimpan data dari database ke dalam cache, mengurangi beban request ke server
    #[Computed()]
    public function users()
    {
        return User::latest()
            ->where('name', 'like', "%{$this->searchQuery}%")
            ->paginate(6);
    }   

    //? jika fungsi render() komponen livewire hanya mengembalikan view dan nama view yang dikembalikan sama dengan nama class, maka bisa dihapus saja
}
