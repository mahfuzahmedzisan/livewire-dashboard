<?php

namespace App\Livewire\Admin\Layouts\Partials;

use Livewire\Component;

class Header extends Component
{
    public $breadcrumb;

    public function render()
    {
        return view('livewire.admin.layouts.partials.header');
    }
}
