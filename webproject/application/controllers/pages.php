<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    //public function index(){
    //    echo "hello";
    //}
    
    function view( $page = 'home' )
    {
        if( !file_exists('application/views/pages/'.$page.'.php') )
        {
                show_404();
        }
        
        $this->load->view('pages/'.$page);
    }

}

?>