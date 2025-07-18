<?php

namespace App\Livewire\Admin\Layouts\Partials;

use Livewire\Component;

class Notification extends Component
{
    public $notifications = [];

    public function render()
    {
        return view('livewire.admin.layouts.partials.notification');
    }
}
