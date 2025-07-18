<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.frontend.app')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.frontend.home');
    }
}
