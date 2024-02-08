<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class ListGroup extends Component
{

    /**
     * Background color
     * @var string|null
     */
    public ?string $bg;

    /**
     * if a border should be shown around the List Group
     * @var bool|mixed|null
     */
    public ?bool $border;

    public function __construct(
        $bg     = null,
        $border = false,
    ) {

        $this->bg = match ($bg) {
            'transparent'   => 'border-0 bg-none',
            'warning'       => 'bg-red-200/20 text-red-300/90 border rounded-lg border-red-300/60',
            'success'       => 'bg-green-200/20 text-green-300/90 border rounded-lg border-green-300/60',
            'info'          => 'bg-blue-300/20 text-blue-300/90 border rounded-lg border-blue-400/60',
            'notice'        => 'bg-yellow-300/20 text-yellow-300/90 border rounded-lg border-yellow-300/60',
            default         => 'bg-cyan-200/20 text-cyan-300/80 border rounded-lg border-cyan-300/60',
        };
        $this->border = $border;
    }

    public function render()
    {
        return view('fusion-core-ui::components.list-group');
    }

}
