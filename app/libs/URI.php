<?php

class URI
{
    protected $_baseController = 'Home';
    protected $_baseMethod = 'index';

    // URL sanatized 
    // $_uri = array();

    function __construct()
    {        
    }

    /*
    *   @param string 
    *   @return uri array or false
    */

    function _valid_uri($uri = null)
    {
        if ($uri) {
            $_uri =  filter_var(rtrim($uri, '/'), FILTER_SANITIZE_URL);
            return  explode('/', $_uri);
        } else
            return [$this->_baseController, $this->_baseMethod];
    }
}
