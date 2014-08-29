<?php

class model1 extends CI_model {
	public function model12() {
		$this->load->database();
		session_start();
		 $empid = $_SESSION["empid"];
		$query= $this->db->query("SELECT php,android,ios FROM registrationdetails WHERE 		employee_id='".$empid."'");
	  return $query->result();
   }
}