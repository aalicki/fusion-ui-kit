<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Aalicki\FusionCoreUI\Fusion;
use Illuminate\View\Component;

class TableRow extends Component
{

    public ?string $rowStyle;

    public function __construct(
        $rowStyle = 'default',
    ) {

        $this->rowStyle = match ($rowStyle) {
            'transparent'   => 'border-0',
            'warning'       => 'bg-red-500/60 hover:bg-red-500 text-red-200',
            'success'       => 'bg-green-500/60 hover:bg-green-500 text-green-200 border-b border-b-green-400',
            'info'          => 'bg-blue-500/60 hover:bg-blue-500 text-blue-200',
            'notice'        => 'bg-yellow-500/60 hover:bg-yellow-500 text-yellow-200',
            default         => 'bg-cyan-600 hover:bg-cyan-500 text-cyan-200'
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.table-row');
    }
}
