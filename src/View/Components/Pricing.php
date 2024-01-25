<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Pricing extends Component
{

    public ?string $columns;

    public function __construct(
        $columns = 3
    ) {
        $this->columns = $columns;
    }

    public function render()
    {
        return view('fusion-core-ui::components.pricing');
    }

}
