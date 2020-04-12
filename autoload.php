<?php 

function scandir_clean($dir)
{
    $files = scandir($dir);
    unset($files[0]);
    unset($files[1]);
    return $files;
}

function get_config($key=null)
{
    
    $json = file_get_contents("config.json");
    $obj = json_decode($json);
    if ($key == null) {
        return $obj;
    }
    return $obj->$key;
    
}

// core
$core_dir = get_config("core_dir");
$core = scandir_clean($core_dir);
foreach ($core as $c) {
    require_once($core_dir . "/" . $c);
}

// helpers
$helpers_dir = get_config("helpers_dir");
$helpers = scandir_clean($helpers_dir);
foreach ($helpers as $helper) {
    require_once($helpers_dir . "/" . $helper);
}