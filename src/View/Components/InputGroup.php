<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class InputGroup extends Component
{

    public ?string $columns;
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
