<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AuthHeader extends Component
{
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.components.auth-header');
    }
}
