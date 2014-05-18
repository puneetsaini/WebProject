<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
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
           
    
}
