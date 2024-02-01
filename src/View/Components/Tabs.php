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

        $this->bg       = $bg;
        $this->classes  = $classes;
        $this->type     = match ($type) {
            'warning'   => 'bg-red-200/20 text-red-300/90  border-red-300/60',
            'success'   => 'bg-green-200/20 text-green-300/90 border-green-300/60',
            'info'      => 'bg-blue-300/20 text-blue-300/90 border-blue-400/60',
            'notice'    => 'bg-yellow-300/20 text-yellow-300/90 border-yellow-300/60',
            default     => 'bg-cyan-300/20 text-cyan-300/90 border-cyan-300/60',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.tabs');
    }
}
