<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Tab extends Component
{

    /**
     * If the Tab is active (current tab)
     * @var bool|mixed|null
     */
    public ?bool $active;

    /**
     * Additional classes to be applied to component
     * @var string|mixed|null
     */
    public ?string $classes;

    public function __construct(
        $active     = false,
        $classes    = null
    ) {

        $this->active   = $active;
        $this->classes  = $classes;
    }

    public function render()
    {
        return view('fusion-core-ui::components.tab');
    }

}
