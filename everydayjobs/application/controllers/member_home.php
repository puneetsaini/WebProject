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
        // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
        echo '<br /><a href="'.base_url().'member_home/do_logout">Logout!</a>';
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