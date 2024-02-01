<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class InputGroup extends Component
{

    /**
     * Number of columns for inputs
     * @var string|int|mixed|null
     */
    public ?string $columns;

    /**
     * Display a border around the input group
     * True / False
     * @var bool|mixed|null
     */
    public ?bool $border;

    public function __construct(
        $columns    = 1,
        $border     = false,
    ) {

        $this->columns  = $columns;
        $this->border   = $border;
    }

    public function render()
    {
        return view('fusion-core-ui::components.input-group');
    }

}
