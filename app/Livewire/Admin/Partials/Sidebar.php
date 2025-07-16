<?php

namespace App\Livewire\Admin\Partials;

use Livewire\Component;

class Sidebar extends Component
{
    public $desktop;
    public $mobile_menu_open;
    public $sidebar_expanded;
    public $page_slug;

    protected $listeners = ['toggle-sidebar' => 'toggleSidebar', 'close-mobile-menu' => 'closeMobileMenu'];

    public function mount($page_slug)
    {
        $this->page_slug = $page_slug;
        $this->desktop = false; // Initial state, will be updated by Alpine.js
        $this->mobile_menu_open = false;
        $this->sidebar_expanded = false;
    }

    public function toggleSidebar()
    {
        if ($this->desktop) {
            $this->sidebar_expanded = !$this->sidebar_expanded;
        } else {
            $this->mobile_menu_open = !$this->mobile_menu_open;
        }
    }

    public function closeMobileMenu()
    {
        if (!$this->desktop) {
            $this->mobile_menu_open = false;
        }
    }

    public function render()
    {
        return view('livewire.admin.partials.sidebar');
    }
}
