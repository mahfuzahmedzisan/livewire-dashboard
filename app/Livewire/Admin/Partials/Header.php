<?php

namespace App\Livewire\Admin\Partials;

use Livewire\Component;

class Header extends Component
{
    public $breadcrumb;
    public $showNotifications = false;

    public function mount($breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function toggleNotifications()
    {
        $this->showNotifications = !$this->showNotifications;
    }

    public function render()
    {
        return view('livewire.admin.partials.header');
    }
}
