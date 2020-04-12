<?php



function css_tag($url, $echo=true)
{
    $base_url = get_config("base_url");
    $css_dir = get_config("css_dir");   
    $html = "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$base_url}{$css_dir}/{$url}.css\">\n";
    if ($echo){
        echo $html;
    }
    
    return $html;
}


function js_tag($url, $echo=true)
{    
    $base_url = get_config("base_url");
    $js_dir = get_config("js_dir");   
    $html = "<script src=\"{$base_url}{$js_dir}/{$url}.js\"></script>\n";
    if ($echo){
        echo $html;
    }
    
    return $html;
}


function img($src, $size=null, $attributes=[], $echo=true)
{   
    
    $base_url = get_config("base_url");
    $img_dir = get_config("img_dir");
    $w = "";
    $h = "";
    if ($size != null) {
        $size = explode("x", $size);
        $w = "width=\"".$size[0]."\"";
        $h = "height=\"".$size[1]."\"";
    }
    $attr = "";
    foreach($attributes as $key => $value) {
        $attr .= "{$key}=\"{$value}\""; 
    }
    $html = "<img src=\"{$base_url}{$img_dir}/{$src}\" {$w} {$h} {$attr} />";
    if ($echo){
        echo $html;
    }    
    return $html;
}
