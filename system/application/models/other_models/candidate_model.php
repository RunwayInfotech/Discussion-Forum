<?php
class Candidate_model extends CI_Model{
   function candidate_getall()
   {
    $this->load->database();
	$query = $this->db->get('candidate');
	  //$query = $this->db->get_where('candidate',array('id'=>1));
	 return $query->result();
	 //return $query->row_array();
   }
   function candidate_get(){
 $this->load->database();
   $query = $this->db->get_where('candidate',array('id'=>2));
  // return $query->row_array();
   return $query->result();
   }
 } 
?> 