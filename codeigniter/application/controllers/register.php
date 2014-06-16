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
        echo 'inserted';
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
