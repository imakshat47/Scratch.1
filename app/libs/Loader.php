<?php
class Loader
{

    /*
    *   View folder  Path    
    */
    protected $_viewPath = 'app/views/';

    function __construct()
    {
    }

    public function view($_view = null, $_arg = null)
    {
        if ($_view) {
            if ($_arg)
                foreach ($_arg as $_keys => $values) {
                    $$_keys = $values;
                }
            require $this->_viewPath . $_view . '.php';
        } else {
            echo 'Error';
        }
    }
}
