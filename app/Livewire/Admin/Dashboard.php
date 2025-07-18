<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $title = 'Admin Dashboard';
    public $breadcrumb = 'Dashboard';
    public $page_slug = 'admin-dashboard';

    public function showDetails($type)
    {
        // Emit an event to open the details modal
        $this->dispatch('open-details-modal', type: $type);
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}