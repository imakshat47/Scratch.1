<?php
class Bootstrap
{

    function __construct()
    {
        // Input URL through get methord
        $__url = isset($_GET['url']) ? $_GET['url'] : null;

        // Laod Autolaod CLass
        require_once "autoload.php";

        // Instantiating Autoload Object
        $this->__autoload = new Autoload();

        $__setup_class = [
            '__uri' => "URI",
            '__controller' => "Controller"
        ];

        // Instantiating Setup Class Object
        foreach ($__setup_class as $__class_obj => $__class_load) {
            $this->$__class_obj =  $this->__autoload->__class_laod($__class_load);
        }

        //  Defining base_url method
        if (!function_exists('base_url')) {
            function base_url($_base_segment = false)
            {
                global $config;

                return (empty($config['base_url']) ? 'http://localhost/' . $_base_segment : $config['base_url']) . $_base_segment;
            }
        }

        global $route;

        // Checking if URL is valid and sanitizing URL and Then geeting Controller n methord
        $this->__controller->__get_controller(empty($this->__uri->__is_valid_uri($__url)) ? [$route["base_controller"]] : $this->__uri->__is_valid_uri($__url));
    }
}
