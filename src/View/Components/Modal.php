<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{

    /**
     * Show a confirmation button
     * True / False
     * @var string|false|mixed|null
     */
    public ?string $confirmBtn;

    /**
     * Confirm Button UI Theme
     * @var string|null
     */
    public ?string $confirmBtnType;

    /**
     * id of the modal (Required for JS)
     * @var string|mixed|null
     */
    public ?string $id;

    /**
     * Icon to be displayed top center of modal
     * @var string|mixed|null
     */
    public ?string $icon;

    /**
     * Show a Backdrop, blurs and darkens non-modal content
     * True / False
     * @var bool|mixed|null
     */
    public ?bool $backdrop;

    /**
     * Background color and modal theme
     * @var string|null
     */
    public ?string $bg;

    /**
     * Modal Size
     * Default, small, medium, large
     * @var string|null
     */
    public ?string $size;

    public function __construct(
        $confirmBtn     = false,
        $id             = null,
        $icon           = null,
        $backdrop       = false,
        $bg             = null,
        $size           = 'default'
    ) {

        $this->confirmBtn       = $confirmBtn;
        $this->confirmBtnType   = $bg;
        $this->id               = $id;
        $this->icon             = $icon;
        $this->backdrop         = $backdrop;
        $this->bg       = match ($bg) {
            'warning'   => 'bg-red-700/60 text-red-300/90 ring-1 ring-inset ring-red-300/70',
            'success'   => 'bg-green-700/60 text-green-300/90 border border-green-500',
            'info'      => 'bg-blue-700/60 text-blue-300/90 ring-1 ring-inset ring-blue-300/70',
            'notice'    => 'bg-yellow-700/60 text-yellow-300/90 ring-1 ring-inset ring-yellow-300/70',
            default     => 'bg-cyan-700/60 text-cyan-300/90 ring-1 ring-inset ring-cyan-300/70',
        };
        $this->size = match ($size) {
            'lg'    => 'text-2xl px-5 py-4 w-full',
            'md'    => 'text-lg px-4 py-3 w-2/4',
            'sm'    => 'text-sm px-1 py-1 w-1/4',
            default => 'text-base px-3 py-3 w-1/3',
        };
    }

    public function render()
    {
        return view('fusion-core-ui::components.modal');
    }

}
