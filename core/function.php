<?php

function dd($data, $type = false): void
{
    echo "<pre style='color:white;background-color:black;padding:10px'>";

    if ($type) {
        var_dump($data);
    } else {
        print_r($data);
    }
    echo "</pre>";
}


function url(string $patch = null): string
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if (isset($patch)) {
        $url .= "/";

        $url .= $patch;
    }
    return $url;
}