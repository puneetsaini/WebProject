<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index()
    {
        echo 'Login pge';
        $this->home();
    }
    public function home(){
        //$this->load->view("view_home");
		
		$this->load->model("get_job");
        
        $data['results'] = $this->get_job->getAll();
        
        $this->load->view("view_home", $data);
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

	public function login()
    {
        $this->load->view("view_login");
    }
    
    function getJobs()
    {
        $this->load->model("get_job");
        
        $data['results'] = $this->get_job->getAll();
        
        $this->load->view("view_jobs", $data);
    }
    
    function getJobsById()
    {
        $this->load->model("get_job");
        
        $jobid = $_GET["j_id"];
        
        $data['results'] = $this->get_job->getjobbyid($jobid);
        
        $this->load->view("view_editJob", $data);
    }
    
    public function addjob()
    {
        $this->load->model("get_job");
        
        $data['results'] = $this->get_job->getCompJob();
        
        $this->load->view("view_addjob", $data);
    }
    
    function insertJobs()
    {
        $this->load->model("get_job");
        
        $newJob = array(
            "j_category" => $_POST["cat"],
            "j_title" => $_POST["title"],
            "j_description" => $_POST["desc"],
            "j_postdate" => date('Y-m-d'),
            "j_mid" => $_POST["compID"]
        );
        
        $this->get_job->insert1($newJob);
        echo 'inserted';
    }
    
    function updateJob()
    {
        $this->load->model("get_job");
        
        $newRow = array(
            array(
            "j_id" => $_POST["id"],
            "j_category" => $_POST["cat"],
            "j_title" => $_POST["title"],
            "j_description" => $_POST["desc"],
            "j_postdate" => $_POST["date"],
            "j_mid" => $_POST["compId"]
                )
        );
        
        $this->get_job->update1($newRow);
        
        //$this->load->model("get_job");
        
        $data['results'] = $this->get_job->getCompJob();
        
        $this->load->view("view_addjob", $data);
        
        //echo 'updated';
    }
    
    function deleteJob()
    {
        $this->load->model("get_job");
        
        $oldRow = array(
            "j_id" => $_GET["j_id"]
        );
        
        $this->get_job->delete1($oldRow);
        
        echo 'deleted';
    }
    
    function applyJob()
    {
        $this->load->model("get_job");
        
        $jobid = $_GET["j_id"];
        
        $data['results'] = $this->get_job->getjobbyid($jobid);
        
        $this->load->view("view_particularJob", $data);
    }
    
    function sendEmail()
    {
        // http://www.technicalkeeda.com/details/how-to-send-email-using-php-codeigniter
        // http://blog.daanraman.com/coding/codeigniter/sending-smtp-mail-through-gmail-in-codeigniter/
        // http://ellislab.com/codeigniter/user-guide/libraries/email.html
        
        // check out this video later - attachment - https://www.youtube.com/watch?v=EXdomfSFnUg
        
        $from = $_POST["email"];
        $name = $_POST["name"];
        $msg = $_POST["message"];
        $file = $_FILES["filename"];
        
        $config = Array(		
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'ybeedah@gmail.com',
		    'smtp_pass' => 'yash7715776',
		    'smtp_timeout' => '4',
		    'mailtype'  => 'text', 
		    'charset'   => 'iso-8859-1'
		);
 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");	
		$this->email->from($from, $name);
		$this->email->to("ybeedah@gmail.com");
		//$this->email->cc("ybeedah@gmail.com");
		$this->email->subject("Job Application");
		$this->email->message($msg);
			
		$data['message'] = "Sorry Unable to send email...";	
		if($this->email->send()){					
			$data['message'] = "Mail sent...";			
		}	
		 				
		// forward to index page
		//$this->load->view('index', $data);
                echo 'aa';
    
        
    }
    
}
