<?php

namespace App\Livewire\Components\Layouts\App;

use Livewire\Component;

class Sidebar extends Component
{
    public $title = null;

    public function render()
    {
        return view('livewire.components.layouts.app.sidebar');
    }
}
