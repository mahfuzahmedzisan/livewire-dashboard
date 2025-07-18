<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Component;

class Select extends Component
{
    public $name;
    public $label = '';
    public $options = [];
    public $selected = null;
    public $messages = [];
    public $placeholder = null;

    public function render()
    {
        return view('livewire.components.inputs.select');
    }
}
