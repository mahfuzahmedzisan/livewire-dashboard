<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Component;

class Input extends Component
{
    public $name;
    public $label = '';
    public $type = 'text';
    public $placeholder = null;
    public $value = null;
    public $icon = null;
    public $messages = [];

    public function render()
    {
        return view('livewire.components.inputs.input');
    }
}
