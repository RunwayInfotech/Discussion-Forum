<?php
class userhome_model extends CI_Model
{   
     public function index()
	{
      $this->load->view('you_view');
	}
	public function hello()
	{   
 
		if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			///echo "Set and not empty, and no undefined index error!";
			header('Location: http://localhost/Attendence/index.php');
		}
     
		$empid = $_SESSION['empid'];		
		$_GET['user'] = !empty($_GET['user']) ? $_GET['user'] : "";		
		$con = mysql_connect('localhost','root','');
		$db1 = mysql_select_db('attendence', $con);		
		if( $_GET['user'] == "T")
		{ 		
			echo("New Employee successfully added ");
			$this->load->view('userhome_view');
		}
		else
		{   
			$this->load->database();
			$today = mktime(0,0,0, date("m"),date("d"), date("y"));
			$present= date("Y-m-d", "$today")."<br>";			
			$query = $this->db->query("select fname from signindetails where date = '".$present."'");			
			return $query->result(); 
		}				
	}	
}
?>