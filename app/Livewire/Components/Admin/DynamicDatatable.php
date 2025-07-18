<?php

namespace App\Livewire\Components\Admin;

use Livewire\Component;

class DynamicDatatable extends Component
{
    public $config = [];
    public $tableId;
    public $title;
    public $description;
    public $apiUrl;
    public $columns;
    public $formFields;
    public $actions;

    public function mount($config = [])
    {
        $this->config = $config;
        $this->tableId = $config['id'] ?? 'dynamic-table';
        $this->title = $config['title'] ?? 'Data Management';
        $this->description = $config['description'] ?? 'Manage your data with advanced filtering and export options';
        $this->apiUrl = $config['api_url'] ?? '';
        $this->columns = $config['columns'] ?? [];
        $this->formFields = $config['form_fields'] ?? [];
        $this->actions = $config['actions'] ?? [];
    }

    public function render()
    {
        return view('livewire.components.admin.dynamic-datatable');
    }
}
