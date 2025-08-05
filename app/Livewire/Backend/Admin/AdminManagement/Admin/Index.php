<?php

namespace App\Livewire\Backend\Admin\AdminManagement\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin.app')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.admin-management.admin.index');
    }
}
