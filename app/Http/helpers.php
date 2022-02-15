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
