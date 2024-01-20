<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Heading extends Component
{

    public ?string $subheading;
    public ?string $alignment;

    public function __construct(

        $subheading = null,
        $alignment  = 'text-center'
    ) {

        $this->subheading   = $subheading;

        $this->alignment = match ($alignment) {
            'left' => 'text-left',
            'right' => 'text-right	',
            default => 'mx-auto text-center',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.heading');
    }

}
