<?php

namespace App\Livewire\Frontend\Layouts;

use Livewire\Component;

class App extends Component
{
    public $page_slug = null;

    public function render()
    {
        return view('livewire.frontend.layouts.app');
    }
}
