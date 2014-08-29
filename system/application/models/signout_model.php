<?php
class signout_model extends CI_Model
{
   function out()
    { 			
		$this->load->database();
		$empid = $_SESSION['empid']."<br>";
		$query1 = "UPDATE signindetails SET signout = NOW() WHERE employee_id ='".$empid."'";
		//echo "<pre>";
		$result1 = mysql_query($query1);		
		$query2 = "UPDATE `signindetails` SET totaltime = TIMEDIFF(signOut,signIn) WHERE employee_id ='".$empid."'";
		$result2 = mysql_query($query2);		
		// Delete certain session
		unset($_SESSION['empid']);
		// Delete all session variables
			session_destroy();
		// Jump to login page
		//$this->load->view('signout_veiw');	
		header('Location: http://localhost/Attendence/index.php');
	}	 
}
?>