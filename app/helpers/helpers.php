<?php

function view(string $view, array $data = [])
{
    $path = dirname(__FILE__, 2).DIRECTORY_SEPARATOR.'views';

    $templates = new  \League\Plates\Engine($path);

    // render  a template
    echo  $templates->render($view, $data);
}