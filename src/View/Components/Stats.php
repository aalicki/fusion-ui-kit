<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class Stats extends Component
{

    public ?string $bg;
    public ?int $columns;

    public function __construct(
        $bg = 'default',
        $columns = 4,
    ) {

        $this->bg = match ($bg) {
            'transparent'   => 'border-0 bg-none',
            'warning'       => 'bg-red-400/20',
            'success'       => 'bg-green-400/20',
            'info'          => 'bg-blue-400/20',
            'notice'        => 'bg-yellow-400/20',
            default         => 'bg-cyan-600/20',
        };

        $this->columns = $columns;
    }

    public function render()
    {
        return view('fusion-core-ui::components.stats');
    }
}
