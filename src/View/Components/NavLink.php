<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{

    public ?bool $active;
    public ?string $classes;
    public ?string $href;
    public ?string $icon;
    public ?string $id;
    public ?bool $border;
    public ?string $size;

    public function __construct(
        $active     = false,
        $classes    = "text-cyan-300 block hover:text-cyan-200 py-1 px-2",
        $href       = null,
        $icon       = null,
        $id         = null,
        $border     = false,
        $size       = 'default'
    ) {

        $this->active   = $active;
        $this->classes  = $classes;
        $this->href     = $href;
        $this->icon     = $icon;
        $this->id       = $id;
        $this->border   = $border;
        $this->size     = match ($size) {
            'lg' => 'text-2xl px-5 py-4',
            'md' => 'text-lg px-4 py-3',
            'sm' => 'text-sm px-1 py-1',
            default => 'text-base px-2 py-1',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.nav-link');
    }

}
