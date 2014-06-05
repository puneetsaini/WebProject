<?php

class Get_job extends CI_Model{
    function getAll()
    {
        $query = $this->db->query("SELECT * FROM jobs");
        
        return $query->result();
    }
    
    function getCompJob()
    {
        $query = $this->db->query("SELECT * FROM jobs WHERE j_mid=1");
        
        return $query->result();
    }
    
    function insert1($data)
    {
        $this->db->insert("jobs", $data);
    }
    
    function getjobbyid($jobid)
    {
        $query = $this->db->query("SELECT * FROM jobs WHERE j_id = " . $jobid);
        
        return $query->result();
    }
    
    function update1($data)
    {
        $this->db->update_batch("jobs", $data, "j_id");
    }
    
    function delete1($data)
    {
        $this->db->delete("jobs", $data);
    }
}

?>