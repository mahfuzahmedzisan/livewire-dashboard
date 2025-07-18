<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PlaceholderPattern extends Component
{
    public $id;

    public function mount($id = null)
    {
        $this->id = $id ?? uniqid();
    }

    public function render()
    {
        return view('livewire.components.placeholder-pattern');
    }
}
