<?php

namespace App\Livewire\Admin\Layouts;

use Livewire\Component;

class App extends Component
{
    public $title;
    public $breadcrumb;
    public $page_slug;

    public function render()
    {
        return view('livewire.admin.layouts.app');
    }
}
