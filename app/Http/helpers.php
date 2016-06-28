<?php

if(!function_exists('root_url')){
    function root_url($path = false){
        $url = $_SERVER['SERVER_NAME'].($path?"/".$path:"");
        return "//".preg_replace('~/+~', '/', $url);
    }
}


if (!function_exists('codeToHumanWords')) {
    function codeToHumanWords($code) {
        $words = implode(' ', explode('_', $code));
        $words = ucwords($words);
        return $words;
    }
}