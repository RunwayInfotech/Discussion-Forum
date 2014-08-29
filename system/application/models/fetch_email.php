<?php
 class fetch_email extends CI_model  {
		public function email()  {
			$this->load->database();
			$e=$_SESSION['empid'];
			$query= $this->db->query("SELECT fname,lname 
			FROM registrationdetails,tag_eid
			WHERE  tag_eid.tag_eid= '".$e."' AND 
			  tag_eid.employee_id= registrationdetails.employee_id AND
			dont_tag_status ='0'"); 
			 return $query->result(); 
		}
 }
?>