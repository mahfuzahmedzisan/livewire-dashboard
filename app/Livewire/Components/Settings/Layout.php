<?php

namespace App\Livewire\Components\Settings;

use Livewire\Component;

class Layout extends Component
{
    public $heading;
    public $subheading;

    public function render()
    {
        return view('livewire.components.settings.layout');
    }
}
