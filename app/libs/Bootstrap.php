<?php
class Bootstrap
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = preg_replace('/^\//', '', $url);
        require 'URI.php';
        $uri = new URI();

        $_uri = $uri->_valid_uri($url);

        require 'Controller.php';
        require 'Loader.php';
        require  'app/controllers/Errors.php';

        // require 'Views.php';

        $_controller = new Controller();
        // $this->load = new Loader();   


        if ($_controllerName = $_controller->_isVaildController(empty($_uri[0]) ? 'Home' : $_uri[0]))
            if ($_controller->_isVaildMethod($_controllerName, empty($_uri[1]) ?  'index' : $_uri[1])) {
                $_controller->load($_controllerName, empty($_uri[1]) ?  'index' : $_uri[1]);
            }
    }
}
