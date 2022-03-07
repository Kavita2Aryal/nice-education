<?php


function myAsset($url)
{
    return asset($url);
}


/**
 * Admin asset path
 *
 * @param string $url
 *
 * @return string
 */
function adminAssetsUrl($url)
{
    return myAsset("dashboard/" . $url);
}

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function count_space($string)
{
    $length = strlen($string);
    $count = 3;
    $index = $length;
    for($i = 0; $i < $length; ++$i){
        if($string[$i] == ' '){
            $count--;
            if($count == 0){
                $index = $i;
                break;
            }
        }

    }

    $newstr = substr_replace($string, "<br>", $index, 0);

    return $newstr;


}
