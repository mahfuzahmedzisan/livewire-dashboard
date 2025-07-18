<?php

namespace App\Livewire\Components;

use Livewire\Component;

class AuthSessionStatus extends Component
{
    public $status;

    public function render()
    {
        return view('livewire.components.auth-session-status');
    }
}
