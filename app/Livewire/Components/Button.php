<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Button extends Component
{
    public $href = 'javascript:void(0)';
    public $target = '_self';
    public $type = 'primary';
    public $disabled = false;
    public $permission = '';
    public $icon = '';
    public $title = null;
    public $soft = false;
    public $outline = false;
    public $glass = false;
    public $block = false;
    public $no_animation = false;
    public $active = false;
    public $loading = false;
    public $size = 'sm';
    public $icon_position = 'right';
    public $dashed = false;
    public $shape = '';
    public $button = false;

    public $finalClasses;
    public $mergedAttributes;

    public function mount(
        $href = 'javascript:void(0)',
        $target = '_self',
        $type = 'primary',
        $disabled = false,
        $permission = '',
        $icon = '',
        $title = null,
        $soft = false,
        $outline = false,
        $glass = false,
        $block = false,
        $no_animation = false,
        $active = false,
        $loading = false,
        $size = 'sm',
        $icon_position = 'right',
        $dashed = false,
        $shape = '',
        $button = false
    )
    {
        $this->href = $href;
        $this->target = $target;
        $this->type = $type;
        $this->disabled = $disabled;
        $this->permission = $permission;
        $this->icon = $icon;
        $this->title = $title;
        $this->soft = $soft;
        $this->outline = $outline;
        $this->glass = $glass;
        $this->block = $block;
        $this->no_animation = $no_animation;
        $this->active = $active;
        $this->loading = $loading;
        $this->size = $size;
        $this->icon_position = $icon_position;
        $this->dashed = $dashed;
        $this->shape = $shape;
        $this->button = $button;

        $this->calculateClasses();
    }

    public function calculateClasses()
    {
        $typeClasses = [
            'primary' => 'btn-primary',
            'secondary' => 'btn-secondary',
            'accent' => 'btn-accent',
            'success' => 'btn-success',
            'danger' => 'btn-error',
            'warning' => 'btn-warning',
            'info' => 'btn-info',
            'dark' => 'btn-dark',
            'light' => 'btn-light',
            'ghost' => 'btn-ghost',
            'link' => 'btn-link',
            'neutral' => 'btn-neutral dark:text-white',
        ];

        $sizeClasses = [
            'lg' => 'btn-lg',
            'md' => 'btn-md',
            'sm' => 'btn-sm',
            'xs' => 'btn-xs',
        ];

        $buttonTypeClass = $typeClasses[$this->type] ?? 'btn-primary';
        $buttonSizeClass = $sizeClasses[$this->size] ?? '';

        $baseClasses = 'btn uppercase tracking-widest';
        $shapeClass = !empty($this->shape) && in_array($this->shape, ['circle', 'square']) ? 'btn-' . $this->shape : 'rounded-md';

        $shouldHaveWhiteText = true;
        if ($this->soft || $this->outline || $this->glass || $this->dashed || in_array($this->type, ['ghost', 'link', 'light', 'dark'])) {
            $shouldHaveWhiteText = false;
        }

        $this->finalClasses = trim(
            $baseClasses .
                ' ' .
                $buttonTypeClass .
                ' ' .
                $buttonSizeClass .
                ' ' .
                $shapeClass .
                ' ' .
                ($this->soft ? 'btn-soft' : '') .
                ' ' .
                ($this->outline ? 'btn-outline' : '') .
                ' ' .
                ($this->glass ? 'btn-glass' : '') .
                ' ' .
                ($this->block ? 'btn-block' : '') .
                ' ' .
                ($this->no_animation ? 'no-animation' : '') .
                ' ' .
                ($this->active ? 'btn-active' : '') .
                ' ' .
                ($this->loading ? 'btn-loading' : '') .
                ' ' .
                ($this->disabled ? 'btn-disabled' : '') .
                ' ' .
                ($this->dashed ? 'btn-dash' : '') .
                ' ' .
                ($shouldHaveWhiteText ? 'text-white' : ''),
        );

        // This part needs to be handled in the Blade view using $attributes->merge
        // $this->mergedAttributes = $attributes->merge([
        //     'class' => $this->finalClasses,
        //     'title' => $this->title ?? ($this->slot->isNotEmpty() ? strip_tags($this->slot) : ''),
        // ]);
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
