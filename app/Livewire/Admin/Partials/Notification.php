<?php

namespace App\Livewire\Admin\Partials;

use Livewire\Component;

class Notification extends Component
{
    public $showNotifications = false;
    public $notifications = [
        ['id' => 1, 'title' => 'System Update', 'message' => 'System maintenance scheduled for tonight', 'time' => '5 minutes ago', 'icon' => 'settings', 'iconBg' => 'bg-blue-500/20', 'iconColor' => 'text-blue-400'],
        ['id' => 2, 'title' => 'New Comment', 'message' => 'Someone commented on your post', 'time' => '10 minutes ago', 'icon' => 'message-circle', 'iconBg' => 'bg-green-500/20', 'iconColor' => 'text-green-400'],
        ['id' => 3, 'title' => 'Security Alert', 'message' => 'New login from unknown device', 'time' => '1 hour ago', 'icon' => 'shield-alert', 'iconBg' => 'bg-red-500/20', 'iconColor' => 'text-red-400'],
    ];

    protected $listeners = ['toggle-notifications' => 'toggleNotifications'];

    public function toggleNotifications()
    {
        $this->showNotifications = !$this->showNotifications;
    }

    public function render()
    {
        return view('livewire.admin.partials.notification');
    }
}
