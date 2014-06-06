<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Member_home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    public function index(){
         $this->load->view('view_memberhome');
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 ?>