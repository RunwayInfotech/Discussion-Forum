<?php
class Birthdayhome_model extends CI_Model
{
   function birthday()
    { 	 
			if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			//echo "Set and not empty, and no undefined index error!";
			///$this->load->view('you_view');
			header('Location: http://localhost/Attendence/index.php');
		}
		$empid = $_SESSION['empid'];
		$_GET['user'] = !empty($_GET['user']) ? $_GET['user'] : "";		
		{    
			$today = mktime(0,0,0, date("m"),date("d"), date("y"));
			$present= date("Y/m/d", "$today")."<br>";
		$this->load->view('Birthdayhome_view');	
			
		} 		
	}
	
	 
}