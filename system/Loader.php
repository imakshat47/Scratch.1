<?php
class Loader
{
    function __construct()
    {
        $this->uri = new URI();
    }

    /*
    *   @param View name and View Arg
    */
    public function view($_view = null, $_arg = null)
    {
        $this->load = new Loader();

        if ($_view) {
            if ($_arg)
                foreach ($_arg as $_keys => $values)
                    $$_keys = $values;

            require_once VIEWS . $_view . ".php";
        } else
            require_once VIEWS .  "errors.php";
    }
}
