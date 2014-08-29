<?php
class home_model extends CI_Model
{
   function employee_getall()
    { 	
			if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			//echo "Set and not empty, and no undefined index error!";
			//$this->load->view('you_view');
			header('Location: http://localhost/Attendence/index.php');
		}
		$empid = $_SESSION['empid'];
		$_GET['user'] = !empty($_GET['user']) ? $_GET['user'] : "";		
		if( $_GET['user'] == "T")
		{ 		
			echo("New Employee successfully added ");
			$this->load->view('home_view');
		}
		else
		{    
			$today = mktime(0,0,0, date("m"),date("d"), date("y"));
			$present= date("Y-m-d", "$today")."<br>";
		
			$this->load->database();
			//echo $query;
			//exit;
		    $query = $this->db->query("SELECT * FROM event where event_date >= '".$present."' ");
			return $query->result();            			
		} 		
	}
	function employee_get()
	{
		$this->load->database();
		$query1 = $this->db->query('SELECT admin_post FROM administrator WHERE admin_id=111' );	 
		return $query1->result();  
	}	 
}