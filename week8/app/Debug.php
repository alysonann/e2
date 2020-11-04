<?php
namespace App;

class Debug
{
    public static function dump($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

    public static function log($data)
    {
        $file = "log.txt";
        $content = file_get_contents($file) ?? "";
        $content .= print_r($data);
        file_put_contents($file, $content);
    }
}