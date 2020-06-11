<?php
class Controller
{        

    function __construct()
    {
        // Model n view load here        
        $this->load = new Loader();
        $this->uri = new URI();        
    }

    /*
    *   @param Name of controller
    *   @return Controller name / false
    */
    function _isVaildController($name = null)
    {
        $_name = $name . '.php';
        if (file_exists(Controllers . $_name)) {            
            require Controllers . $_name;
            return $name;
        } else {
            $error = new Errors();
            $error->_isError('Controller ' . $_name . ' not found.');
            return false;
        }
    }

    /*
    *   @param Name of controller n Method
    *   @return true / false
    */
    function _isVaildMethod($controller_name = null, $method_name = null)
    {
        if (method_exists($controller_name, $method_name)) {
            return true;
        } else {
            $error = new Errors();
            $error->_isError('No method ' . $method_name . ' found.');
            return false;
        }
    }

    /*
    *   @param Name of controller n Method   
    */
    function load($controller_name = null, $method_name = 'index')
    {
        $_Controller = new $controller_name();
        $_Controller->{$method_name}();
    }
}
