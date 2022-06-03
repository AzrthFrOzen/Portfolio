<?php

if (! function_exists('myEcho'))
{
    function myEcho($content)
    {
        echo "<pre>", print_r($content), "</pre>";
    }

    if (! function_exists('myEnv'))
    {
        function myEnv($key, $default = null)
        {
            if (array_key_exists($key, $_ENV)) {
                return $_ENV[$key];
            }
            else
            {
                return $default;
            }
        }
    }
}