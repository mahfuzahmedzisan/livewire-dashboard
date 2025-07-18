<?php

namespace App\Livewire\Components\Flux\Navlist;

use Livewire\Component;

class Group extends Component
{
    public $expandable = false;
    public $expanded = true;
    public $heading = null;

    public function render()
    {
        return view('livewire.components.flux.navlist.group');
    }
}
