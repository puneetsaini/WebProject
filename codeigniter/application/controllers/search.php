<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
    function __construct()
        {
            parent::__construct();
            
        }
    

    public function index()
    {  
        $this->load->view("view_result");
       
        
    }
    public function  process()
    {
        $this->load->model('search_job');
        $search=  $this->input->post('search');    
        //$query = $this->search_job->getResult($search);
        
        $data['results'] = $this->search_job->getResult($search);
        
        
        
        if(!$data['results']){
            // If user did not validate, then show them login page again
            echo 'No results found';
            //header('location:index.php');
        }else{
           
            //print_r($query); 
             $this->load->view("search_results", $data);
        } 
        
       
         
    }
   
   
}
?>