<?php

/**
 * TODO
 *
 * Add method to pass in Paginator object
 * which can then be passed into the view
 * and iterated over as needed
 */

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{

    public $paginator;
    public ?string $bg;
    public ?bool $prevNextBtns;
    public ?bool $onlyPrevNextBtns;

    public function __construct(
        $paginator = null,
        $bg = null,
        $prevNextBtns = true,
        $onlyPrevNextBtns = false,
    ) {
        $this->paginator = $paginator;
        // Switch styles based on type of alert
        $this->bg = match ($bg) {
            'transparent' => 'border-0 bg-none',
            default => 'bg-cyan-600 text-cyan-300/80',
        };
        $this->prevNextBtns = $prevNextBtns;
        $this->onlyPrevNextBtns = $onlyPrevNextBtns;
    }

    public function render()
    {
        return view('fusion-core-ui::components.pagination');
    }

}
