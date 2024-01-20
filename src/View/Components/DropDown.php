<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class DropDown extends Component
{

    public ?string $label;
    public ?string $name;

    public function __construct(
        $label = null,
        $name = null
    ) {
        $this->label = $label;
        $this->name = $name;
    }

    public function render()
    {
        return view('fusion-core-ui::components.drop-down');
    }

}
