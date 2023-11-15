<?php

namespace App\Livewire;

use Livewire\Component;

class FormElemntSelect extends Component
{
    public $size='n';
    public $extras=['stickers'];
    public function render()
    {
        return view('livewire.form-elemnt-select');
    }
}
