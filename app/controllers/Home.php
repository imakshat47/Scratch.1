<?php
class Home extends Controller
{
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

        $this->load->view('partials/header', $data);
        $this->load->view('home');
        $this->load->view('partials/footer');
    }
}
