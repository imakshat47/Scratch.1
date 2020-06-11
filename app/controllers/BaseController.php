<?php

class BaseController extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function view($page = 'home', $data = null)
    {
        if (!file_exists(Views . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404($page);
        }

        $data['title'] = empty($data['title']) ? ucfirst($page) : $data['title']; // Capitalize the first letter
        $this->load->view('partials/header', $data);
        $this->load->view($page, $data);
        $this->load->view('partials/footer', $data);
    }
}
