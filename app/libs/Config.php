<?php

class Config
{
    function __construct()
    {
        // require Config . 'config.php';
        // global $_config;
        // $_config = $config;
        if (file_exists($base_controller = Controllers . 'BaseController.php'))
            require $base_controller;
        if (!function_exists('base_url')) {
            function base_url($_base_segment = false)
            {
                global $_config;

                return (empty($_config['base_url']) ? 'http://localhost/' : $_config['base_url']) . $_base_segment;
            }
        }

        function show_404($_name = null)
        {
            echo 'Page ' . Views . $_name . '.php not Found!!';
            exit(5); //PAge not found
        }
    }
}
