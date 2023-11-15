<?php

namespace App\Livewire;

use Livewire\Component;

class FormElemntText extends Component
{
    public $message='Hey';
    public function render()
    {
        return view('livewire.form-elemnt-text');
    }
}
