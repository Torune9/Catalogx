<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class catalogModal extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $data,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
<div>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
blade;
    }
}
