<?php

namespace App\Livewire\Components\Partials;

use Livewire\Component;

class Head extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.components.partials.head');
    }
}
