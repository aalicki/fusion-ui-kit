<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    /**
     * HREF to link to when click on card's image
     * @var string|mixed|null
     */
    public ?string $href;

    /**
     * Title of the card
     * @var string|mixed|null
     */
    public ?string $title;


    /**
     * Image used inside the card
     * @var string|mixed|null
     */
    public ?string $image;

    public function __construct(
        $href   = null,
        $title  = null,
        $image  = null
    ) {

        $this->href     = $href;
        $this->title    = $title;
        $this->image    = $image;
    }

    public function render()
    {
        return view('fusion-core-ui::components.card');
    }

}
