<?php
class register_model extends CI_Model
{   
     public function index()
	{
      $this->load->view('you_view');
	}
	public function register()
	{   
		/*if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{ 
			///echo "Set and not empty, and no undefined index error!";
			header('Location: http://localhost/Attendence/index.php');
		}*/
		//else
		{    
			$this->load->database();
			//$today = mktime(0,0,0, date("m"),date("d"), date("y"));
			//$present= date("Y-m-d", "$today")."<br>";			
			
		$insert = mysql_query("INSERT INTO registrationdetails  
					(joining_date,fname,lname,email,sec_email,address,phone_no,sec_phone_no,B_day,PAN,device_issued )VALUES( '".$_POST['doj']."',
					'".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['other_mail']."','".$_POST['address']."',".$_POST['phone']."','".$_POST['ref']."','".$_POST['dob']."','".$_POST['pan']."','".$_POST['device']."')"); 
					if (!mysql_query($insert,$conn))
		            {
			            die('Error: ' . mysql_error());
		            }
		      echo("Details updated successfully");
			header('Location: http://localhost/Attendence/index.php/userhome');
		//if (!mysql_query($insert,$conn))
		{
			//die('Error: ' . mysql_error());
		}
		//echo("Details updated successfully");
	
		}				
	}	
}
?>