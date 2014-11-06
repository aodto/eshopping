<?php
function url ($url = '')
{
    $config = new Config();
    return $config->get('base_url') . $url;
}

function redirect ($url)
{
    header('Location: ' . url($url));
    exit();
}