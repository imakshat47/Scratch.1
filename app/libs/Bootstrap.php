<?php
class Bootstrap
{

    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;

        require 'URI.php';
        require Config . 'config.php';
        global $_config;
        $_config = $config;

        require 'Config.php';
        require 'Controller.php';
        require 'Loader.php';
        require  Controllers . 'Errors.php';

        new Config();
        $uri = new URI();
        $_uri = $uri->_valid_uri($url);

        $_controller = new Controller();

        if ($_controllerName = $_controller->_isVaildController(empty($_uri[0]) ? 'Home' : $_uri[0]))
            if ($_controller->_isVaildMethod($_controllerName, empty($_uri[1]) ?  'index' : $_uri[1])) {
                $_controller->load($_controllerName, empty($_uri[1]) ?  'index' : $_uri[1]);
            }
    }
}
