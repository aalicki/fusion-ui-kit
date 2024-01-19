<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public function __construct(
    ) {
    }

    public function render()
    {
        return view('fusion-core-ui::components.card');
    }

}
