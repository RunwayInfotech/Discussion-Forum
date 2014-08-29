<?php
class logedin_model extends CI_Model
{  
    public function index()
	{	  
		$this->load->view('you_view');
	}
	public function validate_in_db()
	{   	  
		$con = mysql_connect('localhost','root','');
		$db1 = mysql_select_db('attendence', $con);	   
		if(isset($_POST['Submit']))
		{ 	
			/////////////signedin//////
			session_start();
			$admin_id = $_POST['empid'];
			if($_POST['empid'] && $_POST['pass'])
			{  				    
				$query = "SELECT * FROM registrationdetails WHERE 
						(employee_id = '" . mysql_real_escape_string($_POST['empid']) . "') 
						and
						(pass = '" . mysql_real_escape_string($_POST['pass']) . "')";
						$login = mysql_query($query);
						$rs = mysql_fetch_assoc($login);
						$birth= $rs['B_day'];
						 
				if (mysql_num_rows($login) == 1) 
				{ 
					$_SESSION['empid'] = $_POST['empid'];
					$empid = $_SESSION['empid'];
					$today = mktime(0,0,0, date("m"),date("d"), date("y"));
					  $present = date("Y-m-d", "$today");
					
					$pres = explode ("-", $present);		
					$DOB = explode ("-", $birth);
					
					$this->load->database();
						$query1 = "select * from signindetails where employee_id = '".$empid."' AND date = '".$present."' ";		  
						$result1 = mysql_query($query1);
						$rs = mysql_fetch_assoc($result1);
						 $emp_date = $rs['date'];	
						
					if ($emp_date != $present ) 
					{    
					 //echo "hello alredy logged in if"; exit;
						$this->load->database();
						$query1 = "select fname from registrationdetails where employee_id= '".$empid."'";		  
						$result1 = mysql_query($query1);
						$rs = mysql_fetch_assoc($result1);
						$name = $rs['fname'];	
										
						$query = "INSERT INTO signindetails (signIn,fname,employee_id,date) VALUES (NOW(),'".$name."','".$empid."','".$present."')";
			
						$result = mysql_query($query);		 					
						//if(sizeof($rs) >= 1 )
						if($pres[1] == $DOB[1] && $pres[2] == $DOB[2])
						{ 
							header('Location:http://localhost/Attendence/index.php/Birthdayhome');
						}
						else
						{  
							//echo "hello else"; exit;
							header('Location: http://localhost/Attendence/index.php/home');
						}
					}
					else
					{
					  //echo "hello else"; exit;
					  header('Location: http://localhost/Attendence/index.php/home');						
					}										
				}
				else
				{  
				   header('Location:http://localhost/Attendence/index.php?login=F');
				}			
			}
			else
			{
			    header('Location:http://localhost/Attendence/index.php?login=F');
			}
				/////////////signedin///////			
		}
	}	
}
?>