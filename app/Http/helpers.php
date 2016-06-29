<?php

if (!function_exists('os_to_kvs')) {
    function os_to_kvs($os, $valName, $keyName = 'id') {
        $kvs = [];
        foreach ($os as $key => $value) {
            $_key = $value->{$keyName};
            $_val = $value->{$valName};
            $kvs[$_key] = $_val;
        }
        return $kvs;
    }
}

if (!function_exists('root_url')) {
    function root_url($path = false){
        $url = $_SERVER['SERVER_NAME'].($path?"/".$path:"");
        return "//".preg_replace('~/+~', '/', $url);
    }
}


if (!function_exists('code_to_human_words')) {
    function code_to_human_words($code) {
        $words = implode(' ', explode('_', $code));
        $words = ucwords($words);
        return $words;
    }
}