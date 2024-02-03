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
     * Style / UI Color of Tab
     * @var bool|mixed|null
     */
    public ?bool $type;

    /**
     * Additional classes to be applied to component
     * @var string|mixed|null
     */
    public ?string $classes;

    public function __construct(
        $active     = false,
        $classes    = null,
        $type       = 'default'
    ) {

        $this->active   = $active;
        $this->classes  = $classes;
        $this->type     = match ($type) {
            'warning'   => 'hover:border-red-400 hover:text-red-200',
            'success'   => 'hover:border-green-400 hover:text-green-200',
            'info'      => 'hover:border-blue-400 hover:text-blue-200',
            'notice'    => 'hover:border-yellow-400 hover:text-yellow-200',
            default     => 'hover:border-cyan-400 hover:text-cyan-200',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.tab');
    }

}
