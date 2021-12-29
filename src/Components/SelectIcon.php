<?php

namespace ToneflixCode\FontAwesome6\Components;

use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class SelectIcon extends Component
{
    public $selected;
    public $set;
    public $icons;

    protected $ICONS_PATH = __DIR__.'/../../resources/svg/';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected = null)
    {
        $this->selected = $selected;
        $this->set = in_array($set, ['all', 'solid', 'regular', 'brands']) ? $set : 'all';
        $this->icons = $this->loadSvg(false, false, $set);
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

    public function loadSvg($show = null, $link = false)
    {
        $this->set = $this->set ? trim($this->set, '/').'/' : 'all';

        $show = ($show && stripos($show, '.svg') === false) ? "{$show}.svg" : $show;

        $icons_array = [];

        foreach (File::files($this->ICONS_PATH . $this->set) as $k => $icon) 
        {
            if ($icon->getExtension() === 'svg') 
            {
                $icons_array[$icon->getFileName()] = $this->ICONS_PATH . $this->set . $icon->getFileName();
            }
        }

        if ($show && file_exists($icons_array[$show] ?? '--;--') && ! is_dir($icons_array[$show] ?? '--;--')) 
        {
            $icons_array = ($link === true)
                ? asset('vendor/blade-fontawesome6-free/'.$show)
                : file_get_contents($icons_array[$show]);
        } 
        elseif ($show) 
        {
            $icons_array = ($link === true)
                ? asset('vendor/blade-fontawesome6-free/'.collect($icons_array)->first())
                : file_get_contents(current($icons_array));
        }

        return $icons_array;
    }
}
