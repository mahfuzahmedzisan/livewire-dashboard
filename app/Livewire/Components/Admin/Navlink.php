<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navlink extends Component
{
    public $icon = 'folder';
    public $name = 'Multi Navlink';
    public $boxicon = false;
    public $active = '';
    public $page_slug = '';
    public $items = [];
    public $type = 'dropdown';
    public $route = '';
    public $permission = '';

    public $filteredItems = [];
    public $isMainActive = false;
    public $isDropdownActive = false;
    public $isAnyActive = false;
    public $shouldShowComponent = false;

    public function mount(
        $icon = 'folder',
        $name = 'Multi Navlink',
        $boxicon = false,
        $active = '',
        $page_slug = '',
        $items = [],
        $type = 'dropdown',
        $route = '',
        $permission = ''
    )
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->boxicon = $boxicon;
        $this->active = $active;
        $this->page_slug = $page_slug;
        $this->items = $items;
        $this->type = $type;
        $this->route = $route;
        $this->permission = $permission;

        $this->processNavItems();
    }

    public function processNavItems()
    {
        $defaultSubitemIcon = 'tags';
        $defaultMultiSubitemIcon = 'circle';

        $filteredItems = [];
        $mainPermissions = [];

        foreach ($this->items as $item) {
            $hasPermission = true;

            if (isset($item['permission']) && !empty($item['permission'])) {
                $hasPermission = Auth::user()->can($item['permission']);
                $mainPermissions[] = $item['permission'];
            }

            if (isset($item['subitems']) && count($item['subitems']) > 0) {
                $filteredSubitems = [];

                foreach ($item['subitems'] as $subitem) {
                    $hasSubPermission = true;

                    if (isset($subitem['permission']) && !empty($subitem['permission'])) {
                        $hasSubPermission = Auth::user()->can($subitem['permission']);
                    }

                    if ($hasSubPermission) {
                        $filteredSubitems[] = $subitem;
                    }
                }

                if (count($filteredSubitems) > 0) {
                    $item['subitems'] = $filteredSubitems;
                    $filteredItems[] = $item;
                }
            } else {
                if ($hasPermission) {
                    $filteredItems[] = $item;
                }
            }
        }

        $this->filteredItems = $filteredItems;

        $this->isMainActive = $this->type === 'single' && $this->page_slug == $this->active;
        $this->isDropdownActive = false;

        foreach ($this->filteredItems as $item) {
            if (isset($item['active']) && $this->page_slug == $item['active']) {
                $this->isDropdownActive = true;
                break;
            }
            if (isset($item['subitems'])) {
                foreach ($item['subitems'] as $subitem) {
                    if (isset($subitem['active']) && $this->page_slug == $subitem['active']) {
                        $this->isDropdownActive = true;
                        break 2;
                    }
                }
            }
        }

        $this->isAnyActive = $this->isMainActive || $this->isDropdownActive;
        $this->shouldShowComponent = $this->type === 'single' ? empty($this->permission) || Auth::user()->can($this->permission) : count($this->filteredItems) > 0;
    }

    public function render()
    {
        return view('livewire.components.admin.navlink');
    }
}
