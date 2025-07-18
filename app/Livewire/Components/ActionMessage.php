<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ActionMessage extends Component
{
    public $on;

    public function render()
    {
        return view('livewire.components.action-message');
    }
}
