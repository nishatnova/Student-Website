<?php


function view($view, $data = [], $print = true)
{
    $output = "View not found";
    $filePath = "views/".$view.".php";   //views.home.php

    if (file_exists($filePath))
    {
        extract($data);
        ob_start();
        include $filePath;
        $output = ob_get_clean();
    }
    if ($print)
    {
        print $output;
    }
}

