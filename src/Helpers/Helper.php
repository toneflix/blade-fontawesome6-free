<?php

use Illuminate\Support\Facades\File;

if (! function_exists('loadSvg')) {
    function loadSvg($icon_name = null, $ICONS_PATH = null, $link = false, $set = 'all')
    {
        $ICONS_PATH = realpath($ICONS_PATH ?: __DIR__.'/../../resources/svg/'.$set).'/';

        $icon_name = ($icon_name && stripos($icon_name, '.svg') === false) ? "{$icon_name}.svg" : $icon_name;

        $icons_array = [];

        foreach (File::files($ICONS_PATH) as $k => $icon) {
            if ($icon->getExtension() === 'svg') {
                $icons_array[$icon->getFileName()] = $ICONS_PATH.$icon->getFileName();
            }
        }

        if ($icon_name && file_exists($icons_array[$icon_name] ?? '--;--') && ! is_dir($icons_array[$icon_name] ?? '--;--')) {
            $icons_array = ($link === true)
                ? url('vendor/blade-fontawesome6-free/'.$set.'/'.$icon_name)
                : file_get_contents($icons_array[$icon_name]);
        } elseif ($icon_name) {
            $icons_array = ($link === true)
                ? url('vendor/blade-fontawesome6-free/'.$set.'/'.collect($icons_array)->first())
                : file_get_contents(current($icons_array));
        }

        return $icons_array;
    }
}
