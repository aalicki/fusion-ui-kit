<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Avatar extends Component
{

    public ?string $img;

    /**
     * Size of the avatar
     * @var string|mixed|null
     */
    public ?string $size;

    public ?string $label;

    public function __construct(
        $img = null,
        $size = null,
        $label = null
    ) {

        $this->img = $img;

        // Switch styles based on type of alert
        $this->size = match ($size) {
            'lg' => 'h-28 w-28',
            'md' => 'h-16 w-16',
            'sm' => 'h-10 w-10',
            default => 'h-20 w-20',
        };

        $this->label = $label;
    }

    public function render()
    {
        return view('fusion-core-ui::components.avatar');
    }

}
