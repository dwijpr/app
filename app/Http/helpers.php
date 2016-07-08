<?php

if (!function_exists('year_months_list')) {
    function year_months_list($end, $start) {
        $end = new DateTime($end->addMonth()->format('Y-m-d'));
        $start = new DateTime($start->format('Y-m-d'));
        $interval = DateInterval::createFromDateString('1 month');
        $period = new DatePeriod($start, $interval, $end);
        $months = [];
        foreach ($period as $dt) {
            $months[] = $dt->format("Y-m");
        }
        return $months;
    }
}

if (!function_exists('os_to_a')) {
    function os_to_a($os, $field) {
        $array = [];
        foreach ($os as $i => $o) {
            $array[] = $o->$field;
        }
        return $array;
    }
}

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

if (!function_exists('l')) {
    function l($key, $object = []) {
        $stringObject = json_encode($object);
        \App\Log::create([
            'user_id' => @auth()->user()->id,
            'key' => $key,
            'uri' => request()->getRequestUri(),
            'method' => request()->getMethod(),
            'user_agent' => request()->header('User-Agent'),
            'ip_address' => request()->ip(),
            'app' => config('app.name'),
            'data' => $stringObject,
        ]);
    }
}

if(!function_exists('root_url')){
    function root_url($path = false){
        $url = $_SERVER['SERVER_NAME'].($path?"/".$path:"");
        return "//".preg_replace('~/+~', '/', $url);
    }
}

/*
 * http://stackoverflow.com/questions/5249279/file-get-contents-php-fatal-error-allowed-memory-exhausted/5249971#5249971
 */

if (!function_exists('file_get_contents_chunked')) {
    function file_get_contents_chunked(
        $file, $chunk_size, $callback, $stopI = false
    ) {
        try {
            $handle = fopen($file, "r");
            $i = 0;
            while (!feof($handle) and $i !== $stopI) {
                call_user_func_array($callback, [
                    fread($handle, $chunk_size),
                    &$handle,
                    $i
                ]);
                $i++;
            }
            fclose($handle);
        } catch (Exception $e) {
            trigger_error(
                "file_get_contents_chunked::".$e->getMessage(), E_USER_NOTICE
            );
            return false;
        }
        return true;
    }
}

if (!function_exists('code_to_human_words')) {
    function code_to_human_words($code) {
        $words = implode(' ', explode('_', $code));
        $words = ucwords($words);
        return $words;
    }
}