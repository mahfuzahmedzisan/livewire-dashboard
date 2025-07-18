<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Route as RouteFacade;

class ActionButtons extends Component
{
    public $menuItems = [];
    public $processedMenuItems = [];

    public function mount()
    {
        $this->processMenuItems();
    }

    public function processMenuItems()
    {
        $this->processedMenuItems = collect($this->menuItems)->filter(function ($menuItem) {
            if (isSuperAdmin()) {
                return true;
            }
            if (isset($menuItem['permissions']) && is_array($menuItem['permissions']) && count($menuItem['permissions']) > 0) {
                return admin()->hasAnyPermission($menuItem['permissions']);
            }
            return true; // No permissions required
        })->filter(function ($menuItem) {
            return isset($menuItem['routeName']) && $menuItem['routeName'] != '';
        })->map(function ($menuItem) {
            $parameterArray = $menuItem['params'] ?? [];
            $route = ($menuItem['routeName'] === 'javascript:void(0)')
                ? 'javascript:void(0)'
                : (RouteFacade::getRoutes()->hasNamedRoute($menuItem['routeName']) ? route($menuItem['routeName'], $parameterArray) : 'javascript:void(0)');

            $delete = isset($menuItem['delete']) && isset($menuItem['params'][0]) && $menuItem['delete'] === true;
            $pDelete = isset($menuItem['p-delete']) && isset($menuItem['params'][0]) && $menuItem['p-delete'] === true;
            $issue = isset($menuItem['issue']) && isset($menuItem['params'][0]) && $menuItem['issue'] === true;
            $div_id = '';
            if ($delete || $pDelete || $issue) {
                $div_id = 'delete-form-' . ($menuItem['params'][0] ?? '');
            }

            return array_merge($menuItem, [
                'route' => $route,
                'is_delete' => $delete,
                'is_p_delete' => $pDelete,
                'is_issue' => $issue,
                'div_id' => $div_id,
                'href' => ($delete || $pDelete || $issue) ? 'javascript:void(0)' : $route,
            ]);
        })->all();
    }

    public function render()
    {
        return view('livewire.components.action-buttons');
    }
}