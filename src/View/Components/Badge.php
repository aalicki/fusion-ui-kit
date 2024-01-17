<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{

    public ?string $type;

    public ?string $icon;

    public function __construct(
        $type = null,
        $icon = null
    ) {

        // Switch styles based on type of alert
        $this->type = match ($type) {
            'warning' => 'bg-red-200/20 text-red-300/90 ring-1 ring-inset ring-red-300/70',
            'success' => 'bg-green-200/20 text-green-300/90 ring-1 ring-inset ring-green-300/70',
            'info' => 'bg-blue-300/20 text-blue-300/90 ring-1 ring-inset ring-blue-300/70',
            'notice' => 'bg-yellow-300/20 text-yellow-300/90 border-yellow-300/60',
            default => 'bg-cyan-200/20 text-cyan-300/80 ring-1 ring-inset ring-cyan-300/70',
        };

        $this->icon = $icon;
    }

    public function render()
    {
        return view('fusion-core-ui::components.badge');
    }

}
