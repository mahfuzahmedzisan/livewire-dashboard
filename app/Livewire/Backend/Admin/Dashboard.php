<?php

namespace App\Livewire\Backend\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.admin.app')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.dashboard');
    }
}
