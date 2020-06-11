<?php
class Home extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function base_url(){
        return 'Base URL';
    }
    function index()
    {
        $data['title'] = "Welcome to Scratch | Home";
        $this->load->view('partials/header', $data);
        $this->load->view('home');
        $this->load->view('partials/footer');
    }

    function users()
    {
        $data['title'] = "Users";
        // echo $this->base_url();
        $this->load->view('partials/header', $data);
        $this->load->view('home');
        $this->load->view('partials/footer');
    }
}
