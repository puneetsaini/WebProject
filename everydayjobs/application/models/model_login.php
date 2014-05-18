<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * Description: Login model class
 */
class Model_login extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('m_username', $username);
        $this->db->where('m_pswd', $password);
        
        // Run the query
        $query = $this->db->get('members');
        // Let's check if there are any results
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'm_id' => $row->m_id,
                    'm_fname' => $row->m_fname,
                    'm_lname' => $row->m_lname,
                    'm_type' => $row->m_type,
                    'm_username' => $row->m_username,
                    'm_pswd' => $row->m_pswd,
                    'm_company' => $row->m_company,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>