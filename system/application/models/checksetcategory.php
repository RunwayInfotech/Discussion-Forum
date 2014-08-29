<?php

class checksetcategory extends CI_model  {
	 public function checkcategory()  {
		  $this->load->database();
		  	if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) {
					header('Location: http://localhost/Attendence/index.php');
			}
		  $empid = $_SESSION['empid'];
		  $query=$this->db->query(" SELECT php,android,ios 
		  FROM registrationdetails 
		  WHERE employee_id='".$empid."'");
		  foreach($query->result() as $row)  {
			  $x= $row->php; 
			  $y= $row->android; 
			  $z= $row->ios; 
		  }
		  $_SESSION['php']=$x;
		  $_SESSION['android']=$y;
		  $_SESSION['ios']=$z;
		 if($x==0 && $y==0 && $z==0) {
			return false;
		 }
		 else   return true;
		 
	 }
}

?>
