<?php

class Get_register extends CI_Model{ 
    function getAll()
    {
        $query = $this->db->query("SELECT * FROM company");
        
        return $query->result();
    }
	       
    function insert1($data)
    {
        $this->db->insert("company", $data);
    }
    
    function getcompanybyid($companyid)
    {
        $query = $this->db->query("SELECT * FROM company WHERE c_id = " . $companyid);
        
        return $query->result();
    }
    
    function update1($data)
    {
        $this->db->update_batch("company", $data, "c_id");
    }
    
    function delete1($data)
    {
        $this->db->delete("company", $data, "c_id");
    }
}

?>