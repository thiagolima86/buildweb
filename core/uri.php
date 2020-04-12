<?php

function base_url($page="")
{

    return get_config()->base_url.$page;

}


function uri_segment($num=null)
{
    $url = $_SERVER["REQUEST_URI"];
    $uri_dir = uri_dir();
    if (!empty($uri_dir)) {
        $url = str_replace($uri_dir."/", "", $url);
    }
    $url = substr($url, 1);

    if ($url == null) {
        return $url;
    }
    $url = explode("/", $url);
    return $url[$num];

}

function uri_protocol()
{
    $base_url = get_config()->base_url;
    $url = explode("//", $base_url);
    return $url[0]."//";

}

function uri_domain()
{
    $base_url = get_config()->base_url;
    $url = explode("//", $base_url);
    $url_end = explode("/", $url[1]);
    return $url_end[0];
}

function uri_dir()
{
    $base_url = get_config()->base_url;
    $url = explode("//", $base_url);
    $url_end = explode("/", $url[1]);
    return $url_end[1];
}