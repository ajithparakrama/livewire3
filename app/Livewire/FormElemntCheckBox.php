<?php

namespace App\Livewire;

use Livewire\Component;

class FormElemntCheckBox extends Component
{
    public $showEmail = false;
    public $hobies =["Cording"];
    public function render()
    {
        return view('livewire.form-elemnt-check-box');
    }
}
