<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Component;

class File extends Component
{
    public $name;
    public $label;
    public $accept = 'image/*';
    public $messages = [];

    public function render()
    {
        return view('livewire.components.inputs.file');
    }
}
