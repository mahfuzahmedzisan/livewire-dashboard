<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;

class Auth extends Component
{
    public $title = null;

    public function render()
    {
        return view('livewire.components.layouts.auth');
    }
}
