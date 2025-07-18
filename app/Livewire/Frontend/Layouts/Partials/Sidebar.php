<?php

namespace App\Livewire\Frontend\Layouts\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $page_slug = null;

    public function render()
    {
        return view('livewire.frontend.layouts.partials.sidebar');
    }
}
