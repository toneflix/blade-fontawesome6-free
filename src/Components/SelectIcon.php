<?php

namespace ToneflixCode\FontAwesome6\Components;

use Illuminate\View\Component;

class SelectIcon extends Component
{
    public $selected;
    public $set;
    public $icons;

    public $ICONS_PATH = __DIR__.'/../../resources/svg/';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected = null, $set = 'all', $path = null)
    {
        $this->set = in_array($set, ['all', 'solid', 'regular', 'brands']) ? trim($set, '/').'/' : 'all';
        $this->ICONS_PATH = $path ? $path : $this->ICONS_PATH.$this->set;
        $this->selected = $selected;
        $this->icons = loadSvg(false, $this->ICONS_PATH, false);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('fa6::select-form');
    }
}
