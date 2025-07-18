<?php

namespace App\Livewire\Frontend\Layouts\Partials;

use Livewire\Component;

class Header extends Component
{
    public $page_slug;

    public function render()
    {
        return view('livewire.frontend.layouts.partials.header');
    }
}
