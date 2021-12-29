<?php 

use Illuminate\Support\Facades\File;

if (! function_exists('loadSvg')) {
    function loadSvg($show = null, $ICONS_PATH, $set = '', $link = false)
    {
        $set = $set ? trim($set, '/').'/' : 'all';

        $show = ($show && stripos($show, '.svg') === false) ? "{$show}.svg" : $show;

        $icons_array = [];

        foreach (File::files($ICONS_PATH.$set) as $k => $icon) {
            if ($icon->getExtension() === 'svg') {
                $icons_array[$icon->getFileName()] = $ICONS_PATH.$set.$icon->getFileName();
            }
        }

        if ($show && file_exists($icons_array[$show] ?? '--;--') && ! is_dir($icons_array[$show] ?? '--;--')) {
            $icons_array = ($link === true)
                ? asset('vendor/blade-fontawesome6-free/'.$show)
                : file_get_contents($icons_array[$show]);
        } elseif ($show) {
            $icons_array = ($link === true)
                ? asset('vendor/blade-fontawesome6-free/'.collect($icons_array)->first())
                : file_get_contents(current($icons_array));
        }

        return $icons_array;
    }
}