<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{

    /**
     * Type / Color Theme
     * @var string|null
     */
    public ?string $type;

    /**
     * Icon to append before text (or standalone)
     * @var string|mixed|null
     */
    public ?string $icon;

    public function __construct(
        $type = null,
        $icon = null
    ) {

        // Switch styles based on type of alert
        $this->type = match ($type) {
            'warning'   => 'bg-red-200/20 text-red-300/90',
            'success'   => 'bg-green-200/20 text-green-300/90',
            'info'      => 'bg-blue-300/20 text-blue-300/90 ring-1',
            'notice'    => 'bg-yellow-300/20 text-yellow-300/90',
            default     => 'bg-cyan-200/20 text-cyan-300/80',
        };

        $this->icon = $icon;
    }

    public function render()
    {
        return view('fusion-core-ui::components.badge');
    }

}
