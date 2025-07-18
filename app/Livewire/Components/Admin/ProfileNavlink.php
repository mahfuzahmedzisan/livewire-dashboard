<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class ProfileNavlink extends Component
{
    public $route = '';
    public $active = '';
    public $logout = false;
    public $name = '';

    public function render()
    {
        return view('livewire.components.admin.profile-navlink');
    }
}
