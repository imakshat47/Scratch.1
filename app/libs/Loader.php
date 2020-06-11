<?php
class Loader
{

    // /*
    // *   View folder  Path    
    // */
    // protected $_viewPath = 'app/views/';

    function __construct()
    {             
        $this->uri = new URI();
    }

    public function view($_view = null, $_arg = null)
    {
        $this->load = new Loader();
        if ($_view) {
            if ($_arg)
                foreach ($_arg as $_keys => $values) {
                    $$_keys = $values;
                }
           
            require Views . $_view . '.php';
        } else {
            echo 'Error';
        }
    }
}
