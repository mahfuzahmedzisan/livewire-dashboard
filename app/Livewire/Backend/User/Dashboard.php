<?php

namespace App\Livewire\Backend\User;

use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.user.app')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.user.dashboard');
    }
}
