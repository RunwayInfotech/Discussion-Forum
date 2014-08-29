<?php
class userupdate_model extends CI_Model
{
   function update()
    { 	   
		$this->load->database();
		$empid = $_SESSION['empid'];
		if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) {
		//echo 'Set and not empty, and no undefined index error!');
		header('Location: http://localhost/Attendence/index.php');
	}
		$insert = mysql_query("UPDATE registrationdetails SET 
					joining_date = '".$_POST['doj']."',
					fname='".$_POST['fname']."',
					lname = '".$_POST['lname']."',
					
					email = '".$_POST['email']."',
					sec_email = '".$_POST['other_mail']."',
					address = '".$_POST['address']."',
					phone_no = '".$_POST['phone']."',
					sec_phone_no = '".$_POST['ref']."',
					B_day = '".$_POST['dob']."',
					PAN = '".$_POST['pan']."',
					device_issued = '".$_POST['device']."',
			
					WHERE employee_id='".$empid."'");
		
		if (!mysql_query($insert,$conn))
		{
			die('Error: ' . mysql_error());
		}
		echo("Details updated successfully");
		header('Location: http://localhost/Attendence/index.php');
	}
	public function edit($empid)
	{  
		$this->load->database();
		$query = $this->db->query("select * from registrationdetails where employee_id = '".$empid."'");
		return $query->result(); 		
	}
	
	
}
?>