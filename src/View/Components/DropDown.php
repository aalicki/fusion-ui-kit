<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class DropDown extends Component
{

    public ?string $label;
    public ?string $name;
    public ?string $id;

    public function __construct(
        $label  = null,
        $name   = null,
        $id     = null
    ) {
        $this->label    = $label;
        $this->name     = $name;
        $this->id       = $id;
    }

    public function render()
    {
        return view('fusion-core-ui::components.drop-down');
    }

}
