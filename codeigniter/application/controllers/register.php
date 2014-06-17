<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
    public function index()
    {
        echo 'Register Page';
        $this->registration();
    }
    public function registration(){
		
	$this->load->model("get_register");
        
        $data['results'] = $this->get_register->getAll();
        
        $this->load->view("view_register", $data);
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
        
    function getMembers()
    {
        $this->load->model("get_register");
        
        $jobcat = $_GET["j_category"];
        
        $data['results'] = $this->get_register->getAll();
        
        $this->load->view("view_register", $data);
    }
    
    function getMemberById()
    {
        $this->load->model("get_register");
        
        $companyid = $_GET["c_id"];
        
        $data['results'] = $this->get_register->getcompanybyid($companyid);
        
        $this->load->view("view_editcompany", $data);
    }
    
    function insertMembers()
    {
        $this->load->model("get_register");
        
        $newMember = array(
            "c_name" => $_POST["name"],
            "c_address" => $_POST["address"],
            "c_cperson" => $_POST["person"],
            "c_username" => $_POST["username"],
            "c_pswd" => $_POST["passw"],
            "c_tel" => $_POST["phone"],
            "c_email" => $_POST["email"]
        );
        
        $this->get_register->insert1($newMember);
        $to = $_POST["email"];
        $name = $_POST["person"];
        
        $config = Array(		
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'rezwanul61@gmail.com',
		    'smtp_pass' => 'samia1992',
		    'smtp_timeout' => '4',
		    'mailtype'  => 'text', 
		    'charset'   => 'iso-8859-1'
		);
 
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
     		$this->email->from("rezwanul61@gmail.com");
		$this->email->to($to, $name);
		$this->email->subject("Membership Accepted");
		$this->email->message("We are pleased to inform that your membership has been processed. We will send your login credential soon. Thank you.");
			
		$data['message'] = "Record added to the database but sorry Unable to send email to the receipient...";	
		if($this->email->send()){					
			$data['message'] = "Record added to the database and a Mail has ben sent...";			
		}	
                echo $data['message']; 
    }
    
    function updateMember()
    {
        $this->load->model("get_register");
        
        $newRow = array(
            array(
            "c_id" => $_POST["cid"],
            "c_name" => $_POST["name"],
            "c_address" => $_POST["address"],
            "c_cperson" => $_POST["person"],
            "c_username" => $_POST["username"],
            "c_pswd" => $_POST["password"],
            "c_tel" => $_POST["phone"],
            "c_email" => $_POST["email"]    
                )     
        );
        
        $this->get_register->update1($newRow);
               
        echo 'updated';
    }
    
    function deleteMember()
    {
        $this->load->model("get_register");
        
        $oldRow = array(
            "c_id" => $_POST["cid"]
        );
        
        $this->get_register->delete1($oldRow);
        
        echo 'deleted';
    }
    
    function EditCompany()
    {
        $this->load->model("get_register");
        
        $companyid = $_GET["c_id"];
        
        $data['results'] = $this->get_register->getcompanybyid($companyid);
        
        $this->load->view("view_particularCompany", $data);
    }   
}
