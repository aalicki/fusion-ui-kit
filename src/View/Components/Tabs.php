<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class Tabs extends Component
{

    /**
     * Background color
     * @var string|mixed|null
     */
    public ?string $bg;

    /**
     * Any additional classes applied to the button
     * @var string|mixed|null
     */
    public ?string $classes;

    /**
     * Theme / UI Color of the tabs
     * @var string|null
     */
    public ?string $type;

    public function __construct(

        $bg         = 'default',
        $classes    = null,
        $type       = 'default'
    ) {

        $this->bg       = match ($bg) {
            'transparent'   => 'border-0 bg-none',
            default         => 'bg-cyan-300/20',
        };
        $this->classes  = $classes;
        $this->type     = match ($type) {
            'warning'   => 'text-red-300/90 bg-red-300/40 border-red-300/60',
            'success'   => 'text-green-300/90 bg-green-300/40 border-green-300/60',
            'info'      => 'text-blue-300/90 bg-blue-300/40 border-blue-400/60',
            'notice'    => 'text-yellow-300/90 bg-yellow-300/40 border-yellow-300/60',
            default     => 'text-cyan-300/90 border-cyan-300/60',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.tabs');
    }
}
