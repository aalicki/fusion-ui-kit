<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Heading extends Component
{

    /**
     * Text below the main headline
     * @var string|mixed|null
     */
    public ?string $subheading;

    /**
     * Alignment of the heading text (and subheading)
     * @var string|null
     */
    public ?string $alignment;

    public function __construct(

        $subheading = null,
        $alignment  = 'text-center'
    ) {

        $this->subheading   = $subheading;

        $this->alignment = match ($alignment) {
            'left'  => 'text-left',
            'right' => 'text-right	',
            default => 'mx-auto text-center',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.heading');
    }

}
