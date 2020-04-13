<?php

function render($page)
{

    include($page);

}


function filename_page()
{
    $exts = ["php", "html", "htm"];
    $page_name = uri_segment(0);
    $pages_dir = get_config()->pages_dir;
    $homepage = get_config()->homepage;
    
    foreach ($exts as $ext) {
        $filename = $pages_dir."/".$page_name.".".$ext;

        if (empty($page_name)) {
            $filename = $pages_dir."/".$homepage.".".$ext;
        }

        if (file_exists($filename)) {
            return $filename;
        }
    }

    return "";

}

function yield_page()
{
    if (empty(filename_page())) {
        require_once page_dir()."/404.php";
    } else {
        require_once filename_page();
    }
}

function layout_dir()
{
    return get_config()->layout_dir;
}

function layout_default()
{
    return get_config()->layout_default;
}

function layout_current()
{
    $exts = ["php", "html", "htm"];
    $layout_dir = layout_dir();
    $layout_conf = get_config()->layout_conf;
    $pages_dir = get_config()->pages_dir;
    $filename_page = filename_page();
    foreach ($layout_conf as $layout => $pages) {
        foreach ($pages as $page) {
            if ($pages_dir."/".$page == $filename_page) {
                return $layout_dir."/".$layout;
            }
        }
    }
    return $layout_dir."/".layout_default();
}

function page_dir()
{
    return get_config()->pages_dir;
}

function helpers_dir()
{
    return get_config()->helpers_dir;
}

