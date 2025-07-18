<?php

namespace App\Livewire\Components\Flux\Icon;

use Livewire\Component;

class LayoutGrid extends Component
{
    public $variant = 'outline';

    public function render()
    {
        $classes = \Flux::classes('shrink-0')->add(
            match ($this->variant) {
                'outline' => '[:where(&)]:size-6',
                'solid' => '[:where(&)]:size-6',
                'mini' => '[:where(&)]:size-5',
                'micro' => '[:where(&)]:size-4',
            },
        );

        $strokeWidth = match ($this->variant) {
            'outline' => 2,
            'mini' => 2.25,
            'micro' => 2.5,
        };

        return view('livewire.components.flux.icon.layout-grid', compact('classes', 'strokeWidth'));
    }
}
