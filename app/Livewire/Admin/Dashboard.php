<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('backend.admin.layouts.app')]
class Dashboard extends Component
{
    public function render()
    {
        return view('backend.admin.dashboard');
    }
}
