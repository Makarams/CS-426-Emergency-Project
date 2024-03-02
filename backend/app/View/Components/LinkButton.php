<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkButton extends Component
{   
    public $text , $letterSpacing, $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "default", $letterSpacing = "0.08rem", $url = "#")
    {
        $this->text = $text;
        $this->letterSpacing = $letterSpacing;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.link-button');
    }
}
