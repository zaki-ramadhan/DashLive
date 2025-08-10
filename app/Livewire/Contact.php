<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Models\Contact as ModelsContact;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Contact Page')]
class Contact extends Component
{
    // memanggil object ContactForm
    public ContactForm $form;

    public function createNewMessage()
    {
        sleep(1);

        // menggunakan form object "ContactForm"
        $this->form->store();

        session()->flash('message', 'Your message has been sent successfully. Our team will respond as soon as we can');
    }
}
