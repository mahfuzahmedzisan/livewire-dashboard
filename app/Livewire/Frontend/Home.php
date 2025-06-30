<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('frontend.layouts.app')]
class Home extends Component
{
    public function render()
    {
        return view('frontend.pages.home');
    }
}
