<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $stats = [
        'users' => 12384,
        'revenue' => 48392,
        'orders' => 2847,
        'activeUsers' => 847,
    ];

    public function showDetails($type)
    {
        // This method can be expanded to show details based on the type
        // For now, it's a placeholder for the @click functionality
        // You might emit an event, redirect, or update a property to show a modal/section
        // For example: $this->dispatch('show-dashboard-details', $type);
        // Or: $this->redirect(route('admin.details', ['type' => $type]));
    }

    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('backend.admin.layouts.app', [
                'title' => 'Admin Dashboard',
                'breadcrumb' => 'Dashboard',
                'page_slug' => 'admin-dashboard'
            ]);
    }
}
