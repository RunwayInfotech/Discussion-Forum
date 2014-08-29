<?php
class edit_model extends CI_Model
{
   function edit_info()
    { 	
		if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			//echo "Set and not empty, and no undefined index error!";
			//$this->load->view('you_view');
			header('Location: http://localhost/Attendence/index.php');
		}
		else
		{   		
	
			header('Location: http://localhost/Attendence/index.php/home');		
		} 		
	}
	
}