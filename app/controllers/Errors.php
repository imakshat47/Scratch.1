<?php
class Errors extends Controller
{
    // function __construct()
    // {
    // }

    function _isError($_isError)
    {

        $this->load->view('errors', [
            'msg' => $_isError,
            'title' => 'Error'
        ]);
    }
}
