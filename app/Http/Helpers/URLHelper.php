<?php

namespace App\Http\Helpers;

class URLHelper {
    public function root($path = false) {
        $url = $_SERVER['SERVER_NAME'].($path?"/".$path:"");
        return "//".preg_replace('~/+~', '/', $url);
    }
}