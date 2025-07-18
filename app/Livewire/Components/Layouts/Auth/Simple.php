<?php

namespace App\Livewire\Components\Layouts\Auth;

use Livewire\Component;

class Simple extends Component
{
    public $title = null;

    public function render()
    {
        return view('livewire.components.layouts.auth.simple');
    }
}
