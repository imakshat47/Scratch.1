<?php

class URI
{
    function __construct()
    {
        // echo 'URI';
    }    

    /*
    *   @param string url
    *   @return uri array or false
    */
    function __is_valid_uri($uri = null)
    {
        if ($uri) {
            global $config;
            $_uri =  filter_var(rtrim(preg_replace($config['preg_replace'], '', $uri), '/'), FILTER_SANITIZE_URL);
            return  explode('/', $_uri);
        } else
            return false;
    }

    function server($_key)
    {
        if ($_server_key =  empty($_SERVER[$_key]) ? null : $_SERVER[$_key])
            return $_server_key;
    }

    function back_uri()
    {
        if ($this->server('HTTP_REFERER'))
            return $this->server('HTTP_REFERER');
    }

    function segment($_segemnt)
    {
        if ($_segemnt) {
            $uri_segemnt = explode('/', preg_replace('/^\//', '', $_SERVER['REQUEST_URI']));
            if ($_uri_segment = $uri_segemnt[$_segemnt])
                return $_uri_segment;
        } else {
            trigger_error("URI segment '0'", E_USER_WARNING);
        }
    }
}
