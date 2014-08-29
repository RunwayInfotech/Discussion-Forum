<?php
class Register_model extends CI_Model
{  
     public function index()
	{	  
		$this->load->view('register_view');
	}
	public function insert_to_db()
	{   
	   $con = mysql_connect('localhost','root','');
       $db1 = mysql_select_db('mydata', $con);
	    //$this->load->database($db1);
		//echo"<pre>";
		//print_r($_REQUEST);
		//exit;
		if(isset($_POST['Submit']))
		{ 
			if(!empty($_FILES)) 
			{	
				if(is_uploaded_file($_FILES["file"]["tmp_name"]))
				{   
					$tmp_name = $_FILES["file"]["tmp_name"];
					$new_name = "D:/fieldset/".$_FILES["file"]["name"];			
					move_uploaded_file($_FILES["file"]["tmp_name"],"D:/fieldset/".$_FILES["file"]["name"]);
					$path = "images/".$_FILES["file"]["name"];
					if(move_uploaded_file($tmp_name, $new_name))
					{
						exit('Could not move the file');
					}
					else 
					{  
						//echo "INSERT INTO student(name,email) VALUES('".$name."','".$email."')" ;
						//exit;
						// $query="INSERT INTO student(name,email,gender,browse,graduation,intermediate,highschool,stream,workexoerience,address) VALUES('$_POST[name]','$_POST[email]','$_POST[gender]','$path','$_POST[graduation]','$_POST[intermediate]','$_POST[highschool]','$_POST[stream]','$_POST[workexperience]','$_POST[address]')";
						echo  $query="INSERT INTO student(name,email,browse,graduation,intermediate,highschool,stream,address) VALUES('$_POST[name]','$_POST[email]','$path','$_POST[graduation]','$_POST[intermediate]','$_POST[highschool]','$_POST[stream]','$_POST[address]')";
						$result = mysql_query($query) or die();
						echo "<pre>";
						print_r($result);
						//exit;
					}
			    }			  
		    }
		}
	}	
}
?>