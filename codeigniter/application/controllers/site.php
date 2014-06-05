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
        
        echo 'updated';
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
    
}
