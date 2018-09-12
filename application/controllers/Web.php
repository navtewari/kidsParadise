<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data_['pageName'] = 'Home';
        $data_['menu'] = 1;
        $this->load->view('templates/header', $data_);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    function about() {
        $data_['pageName'] = 'About Us';
        $data_['menu'] = 2;
        $this->load->view('templates/header', $data_);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }
    
    function uc() {
        $data_['pageName'] = 'Under Construction';
        $data_['menu'] = 0;
        $this->load->view('templates/header', $data_);
        $this->load->view('uc');
        $this->load->view('templates/footer');
    }
    
    function contact() {
        $data_['pageName'] = 'Contact Us';
        $data_['menu'] = 3;
        $this->load->view('templates/header', $data_);
        $this->load->view('contact');
        //$this->load->view('templates/footer');
    }

}
