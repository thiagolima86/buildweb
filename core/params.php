<?php



function params($key)
{
    if (isset($_GET[$key])) {

        return $_GET[$key];

    } elseif(isset($_POST[$key])) {

        return $_POST[$key];
        
    }
    return false;
}

function get($key)
{
    if (isset($_GET[$key])) {
        return $_GET[$key];
    }
    return false;
}


function post($key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return false;
}