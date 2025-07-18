<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class SecondaryLink extends Component
{
    public $error = false;

    public function render()
    {
        return view('livewire.components.admin.secondary-link');
    }
}
