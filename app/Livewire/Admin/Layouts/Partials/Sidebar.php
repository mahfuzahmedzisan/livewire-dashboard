<?php

namespace App\Livewire\Admin\Layouts\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $active;

    public function render()
    {
        return view('livewire.admin.layouts.partials.sidebar');
    }
}
