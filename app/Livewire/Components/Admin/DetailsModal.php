<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class DetailsModal extends Component
{
    public $title = 'Details Modal';

    public function render()
    {
        return view('livewire.components.admin.details-modal');
    }
}
