<?php

use Phharrin\Functions\Debug\Dumper;

if (!function_exists('protocol')) {
    function protocol()
    {
        return !isset($_SERVER['HTTPS']) || ('off' == $_SERVER['HTTPS']) ? 'http://' : 'https://';
    }
}

if (!function_exists('d'))
{
    function d()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());
    }
}
