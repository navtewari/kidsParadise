<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }

    function index() {
        $data['news'] = $this->mm->get_most_recent_news();
        $data['imp_dates'] = $this->mm->get_most_recent_imp_dates();
        $data_['pageName'] = 'Home';
        $data_['menu'] = 1;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $this->load->view('templates/header', $data_);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    function about() {
        $data_['pageName'] = 'About Us';
        $data_['menu'] = 2;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $this->load->view('templates/header', $data_);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    function uc() {
        $data_['pageName'] = 'Under Construction';
        $data_['menu'] = 0;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $this->load->view('templates/header', $data_);
        $this->load->view('uc');
        $this->load->view('templates/footer');
    }

    function contact() {
        $data_['pageName'] = 'Contact Us';
        $data_['menu'] = 10;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $this->load->view('templates/header', $data_);
        $this->load->view('contact');
        //$this->load->view('templates/footer');
    }

    function activities($categid) {
        $data['categ'] = $this->mm->getActivityCategory($categid);
        if ($data['categ'] != '-X-') {
            $data['activity_'] = $this->mm->get_activities($categid);
            if (count($data['activity_']) != 0) {
                $data_['pageName'] = 'Activities';
                $data_['menu'] = 5;
                $data['activities_category'] = $data_['activities_category'] = $this->mm->get_active_activity_category();
                $this->load->view('templates/header', $data_);
                $this->load->view('activities', $data);
                $this->load->view('templates/footer');
            } else {
                redirect('web');
            }
        } else {
            redirect('web');
        }
    }

    function downloads() {
        $data['dwnlds'] = $this->mm->getDownloads();
        if (count($data['dwnlds']) != 0) {
            $data_['activities_category'] = $this->mm->get_active_activity_category();
            $data_['pageName'] = 'Downloads';
            $data_['menu'] = 7;
            $this->load->view('templates/header', $data_);
            $this->load->view('downloads', $data);
            $this->load->view('templates/footer');
        } else {
            redirect('web');
        }
    }

    function imagePics() {
        $data_['pageName'] = 'Image Gallery (Photos)';

        $data_['menu'] = 6;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $data_['gallery_category'] = $this->mm->get_gallery_category();

        $this->load->view('templates/header', $data_);
        $this->load->view('gallery', $data_);
        $this->load->view('templates/footer');
    }

    public function gallery_detail($id) {
        $data_['pageName'] = 'Image Gallery (Photos)';

        $data_['menu'] = 6;
        $data_['activities_category'] = $this->mm->get_active_activity_category();
        $data_['gallery'] = $this->mm->get_gallery($id);
        
        $this->load->view('templates/header', $data_);
        $this->load->view('gallery_inner', $data_);
        $this->load->view('templates/footer');
    }
    
     public function videos() {
        $data_['pageName'] = 'Video Gallery';
        $data_['menu'] = 6;
        $data_['activities_category'] = $this->mm->get_active_activity_category();       
        
        $this->load->view('templates/header', $data_);
        $this->load->view('video', $data_);
        $this->load->view('templates/footer');
    }

}
