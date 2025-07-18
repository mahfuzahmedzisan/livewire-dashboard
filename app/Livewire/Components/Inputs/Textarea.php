<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Component;

class Textarea extends Component
{
    public $name;
    public $label;
    public $placeholder = null;
    public $value = null;
    public $rows = 3;
    public $messages = [];

    public function render()
    {
        return view('livewire.components.inputs.textarea');
    }
}
