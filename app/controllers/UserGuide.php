<?php
class UserGuide extends BaseController
{
    function index()
    {
        $data['title'] = "Welcome | Welcome to Scratch"; 

        $this->view('userGuide/welcome',$data);        
    }

    function install()
    {
        $data['title'] = "UserGuide | Installation";
        
        $this->view('userGuide/install',$data);        
    }
    function tutorial()
    {
        $data['title'] = "UserGuide | Tutorial";
        
        $this->view('userGuide/tutorial',$data);        
    }
}
