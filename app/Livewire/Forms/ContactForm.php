<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Contact;
use Livewire\Attributes\Validate;

// contact form untuk mempermudah dalam pengelolaan form yang kompleks
class ContactForm extends Form
{
    // validasi, properti, dan logic dipindahkan di object ini
    #[Validate('required|string|min:3|max:50')]
    public $subject;

    #[Validate('required|min:15|email:dns')]
    public $email;

    #[Validate('required|string|min:10|max:255')]
    public $message;


    public function store() 
    {
        $this->validate(); 

        Contact::create($this->all());
        
        $this->reset();

    }
}
