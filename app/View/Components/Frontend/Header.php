<?php

namespace App\View\Components\Frontend\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{

    public string $page_slug = '';

    public function __construct(string $page_slug = '')
    {
        $this->page_slug = $page_slug;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('frontend.layouts.partials.header');
    }
}
