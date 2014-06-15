<?php

class Search_job extends CI_Model{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        
    }

	function getResult($search){
		$query = $this->db->query("SELECT j_category,j_title,j_description FROM jobs WHERE j_title LIKE '%$search%'  OR j_description LIKE '%$search%'" );
                return $query->result();
	}
}
    ?>

