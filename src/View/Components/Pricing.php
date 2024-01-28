<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Pricing extends Component
{

    public ?string $bg;
    public ?string $columns;

    public function __construct(
        $columns = 3,
        $bg = 'default'
    ) {
        $this->columns = $columns;
        $this->bg = match ($bg) {
            'transparent' => 'border-0 bg-none',
            'warning' => 'bg-red-200/20',
            'success' => 'bg-green-200/20',
            'info' => 'bg-blue-300/20',
            'notice' => 'bg-yellow-300/20',
            default => 'bg-cyan-600',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.pricing');
    }

}
