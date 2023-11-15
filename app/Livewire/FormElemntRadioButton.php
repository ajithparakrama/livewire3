<?php

namespace App\Livewire;

use Livewire\Component;

class FormElemntRadioButton extends Component
{
    public $sendNewsLatter = 'yes';
    public function render()
    {
        return view('livewire.form-elemnt-radio-button');
    }
}
