<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class DropDown extends Component
{

    /**
     * Text to associate Dropdown with
     * @var string|mixed|null
     */
    public ?string $label;

    /**
     * input name, used for POST fetching
     * @var string|mixed|null
     */
    public ?string $name;

    /**
     * id of the Dropdown
     * @var string|mixed|null
     */
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
