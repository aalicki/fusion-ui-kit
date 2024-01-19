<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public ?string $title;
    public ?string $body;
    public ?string $image;

    public function __construct(
        $title  = null,
        $body   = null,
        $image  = null
    ) {
        $this->title = $title;
        $this->body = $body;
        $this->image = $image;
    }

    public function render()
    {
        return view('fusion-core-ui::components.card');
    }

}
