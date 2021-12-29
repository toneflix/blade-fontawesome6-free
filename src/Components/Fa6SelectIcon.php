<?php

namespace ToneflixCode\FontAwesome6\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class Fa6SelectIcon extends Component
{
    public $slected;
    public $icons;

    protected $ICONS_PATH =     __DIR__.'/../resources/svg/';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slected = null)
    {
        $this->slected = $slected; 
        $this->icons = $this->loadSvg(false, false, 'all', $params = ''); 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('select-form');
    }
 
 
    public function loadSvg($show = null, $link = false, $browse = '', $params = '') 
    { 
        $browse      = $browse ? trim($browse, '/') . '/' : 'all';

        $show        = ($show && stripos($show, '.svg') === false) ? "{$show}.svg" : $show;

        $icons_array = [];

        foreach (File::files($ICONS_PATH . $browse)) as $k => $icon) 
        { 
            if ($icon->getExtension() === 'svg') 
            { 
                $icons_array[$icon->getFileName()] = $ICONS_PATH . $browse . $icon->getFileName();
            }
        }

        if ($select && file_exists($icons_array[$show]??'--;--') && !is_dir($icons_array[$show]??'--;--'))
        {
            $icons_array = ($link === true) 
                ? asset('vendor/blade-fontawesome6-free/' . $show) 
                : file_get_contents($icons_array[$show]);
        }
        elseif ($show)
        {
            $icons_array = ($link === true) 
                ? asset('vendor/blade-fontawesome6-free/' . collect($icons_array)->first()) 
                : file_get_contents(current($icons_array));
        } 

        return $icons_array;
    }
}