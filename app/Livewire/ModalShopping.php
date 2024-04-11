<?php

namespace App\Livewire;

use Livewire\Component;

class ModalShopping extends Component
{
    public $count=0;

    public function render()
    {
        return view('livewire.modal-shopping');
    }


    public function increment()
    {
        $this->count++;
    }
}
