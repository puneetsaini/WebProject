<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
         $this->load->helper('url');  
        
    }
    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('view_login', $data);
    }
    public function process(){
        // Load the model
        $this->load->model('model_login');
        // Validate the user can login
        $result = $this->model_login->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username or password</font><br/>';
            $this->index($msg);
        }else{
            // If user did validate, 
            // Send them to members area
            //redirect('member_home');
             $this->load->model("get_job");
        
        $data['results'] = $this->get_job->getCompJob();
        
        $this->load->view("view_addjob", $data);
        }        
    }
     public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    
}