<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index()
    {
        echo 'Login pge';
        $this->home();
    }
    public function home(){
        $this->load->view("view_home");
    }

    public function join()
    {
        $this->load->view("view_join");
    }
    public function howitworks()
    {
        $this->load->view("view_howitworks");
    }
    public function faq()
    {
        $this->load->view("view_faq");
    }       
    
}
