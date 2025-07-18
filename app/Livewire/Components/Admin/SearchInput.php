<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class SearchInput extends Component
{
    public $placeholder = 'Search';

    public function render()
    {
        return view('livewire.components.admin.search-input');
    }
}