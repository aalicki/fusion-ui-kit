<?php

namespace Aalicki\FusionCoreUI\View\Components;

use Illuminate\View\Component;

class Input extends Component
{

    /**
     * Type / Color Theme
     * @var string|mixed|null
     */
    public ?string $type;

    /**
     * input name used for POST fetching
     * @var string|mixed|null
     */
    public ?string $name;

    /**
     * Default value when initial displayed
     * @var string|mixed|null
     */
    public ?string $value;

    /**
     * id of the input
     * @var string|mixed|null
     */
    public ?string $id;

    /**
     * Label associated with the input
     * @var string|mixed|null
     */
    public ?string $label;

    /**
     * Text to display under input
     * @var string|mixed|null
     */
    public ?string $tip;

    /**
     * Text color of the tip
     * @var string|null
     */
    public ?string $tipColor;

    /**
     * Placeholder text
     * @var string|mixed|null
     */
    public ?string $placeholder;

    /**
     * Size of the input
     * Default, small, medium, large
     * @var string|null
     */
    public ?string $size;

    /**
     * Input type
     * text, password, number, phone, email
     * @var string|null
     */
    public ?string $inputType;

    /**
     * Icon to inject into input
     * @var string|mixed|null
     */
    public ?string $icon;

    /**
     * If the input is disabled
     * True / False
     * @var bool|mixed|null
     */
    public ?bool $disabled;

    public function __construct(

        $type           = 'default',
        $inputType      = 'text',
        $name           = null,
        $value          = null,
        $id             = null,
        $label          = null,
        $tip            = null,
        $placeholder    = null,
        $size           = null,
        $icon           = null,
        $disabled       = false
    ) {

        $this->name         = $name;
        $this->value        = $value;
        $this->id           = $id;
        $this->label        = $label;
        $this->tip          = $tip;
        $this->tipColor     = match ($type) {
            'warning'       => 'text-red-200/60',
            'success'       => 'text-green-200/60',
            'info'          => 'text-blue-200/60',
            'notice'        => 'text-yellow-200/60',
            default         => 'text-cyan-200/60'
        };
        $this->placeholder  = $placeholder;
        $this->size         = match ($size) {
            'lg' => 'text-2xl px-5 py-4',
            'md' => 'text-lg px-4 py-3',
            'sm' => 'text-sm py-1',
            default => 'py-1.5',
        };
        $this->type     = match ($type) {
            'warning'   => 'bg-red-300/20 text-red-200 ring-red-300/70 placeholder:text-red-300/50 focus:ring-red-400',
            'success'   => 'bg-green-300/20 text-green-200 ring-green-300/70 placeholder:text-green-300/50 focus:ring-green-400',
            'info'      => 'bg-blue-300/20 text-blue-200 ring-blue-300/70 placeholder:text-blue-300/50 focus:ring-blue-400',
            'notice'    => 'bg-yellow-300/20 text-yellow-200 ring-yellow-300/70 placeholder:text-yellow-300/50 focus:ring-yellow-400',
            default     => 'bg-cyan-600 text-cyan-200 ring-cyan-300/70 placeholder:text-cyan-300/50 focus:ring-cyan-400',
        };
        $this->inputType    = $inputType;
        $this->icon         = $icon;
        $this->disabled     = $disabled;
    }

    public function render()
    {
        return view('fusion-core-ui::components.input');
    }

}
