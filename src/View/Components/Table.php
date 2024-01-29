<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class Table extends Component
{

    public ?string $headBg;
    public ?string $outerBorder;

    public function __construct(
        $headBg = 'default',
    ) {

        $this->headBg = match ($headBg) {
            'transparent'   => 'border-0 bg-none  border-b-0',
            'warning'       => 'bg-red-800  border-b-red-500',
            'success'       => 'bg-green-800  border-b-green-500',
            'info'          => 'bg-blue-800  border-b-blue-500',
            'notice'        => 'bg-yellow-800  border-b-yellow-500',
            default         => 'bg-cyan-800  border-b-cyan-500',
        };

        $this->outerBorder = match ($headBg) {
            'transparent'   => 'border-0',
            'warning'       => 'border-2 border-red text-red-300/90',
            'success'       => 'border-2 border-green-600 text-green-300/90',
            'info'          => 'border-2 border-blue-600 text-blue-300/90',
            'notice'        => 'border-2 border-yellow-600 text-yellow-300/90',
            default         => 'border-2 border-cyan-600 text-cyan-300/90'
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.table');
    }
}
