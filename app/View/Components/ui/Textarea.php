<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Textarea extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $value,
        public string $error,
        public string $placeholder,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.textarea');
    }
}
