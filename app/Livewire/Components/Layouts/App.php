<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;

class App extends Component
{
    public $title = null;

    public function render()
    {
        return view('livewire.components.layouts.app');
    }
}
