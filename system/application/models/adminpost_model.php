<?php
class adminpost_model extends CI_Model
{
   function edit_post()
    { 	
		if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			//echo "Set and not empty, and no undefined index error!";
			//$this->load->view('you_view');
			header('Location: http://localhost/Attendence/index.php');
		}
		else
		{   		
			$empid = $_SESSION['empid'];
       		$value = $_POST['thetext'];
			$this->load->database();
			$query = "UPDATE administrator SET admin_post='".$_POST['thetext']."' WHERE admin_id='".$empid."'";
			$result = mysql_query($query);
			header('Location: http://localhost/Attendence/index.php/home');		
		} 		
	}
}