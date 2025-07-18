<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class SearchForm extends Component
{
    public $url = null;
    public $method = '';
    public $placeholder = 'Search';

    public function mount($url = null, $method = '', $placeholder = 'Search')
    {
        $this->url = $url;
        $this->method = $method;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('livewire.components.admin.search-form');
    }
}