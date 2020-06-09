<?php
class Home extends Controller
{
    function __construct()
    {
        parent::__construct();        
    }
    function index()
    {
        $data['title'] = "Home";

        echo $this->uri->segment(2);

        $this->load->view('home', $data);
    }

    function users()
    {
        $data['title'] = "Users";        
        echo $this->uri->back_uri();

        $this->load->view('home', $data);
    }
}
