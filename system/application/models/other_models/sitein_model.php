<?php
class sitein_model extends CI_Model
{  
     public function index()
	{	
		echo "hello";
        exit;		
		session_start();
		if(!isset($_SESSION['empid']) || empty($_SESSION['empid'])) 
		{
		//echo 'Set and not empty, and no undefined index error!');
		header("Location:index.php");
		}

		$empid = $_SESSION['empid'];
		$_GET['user'] = !empty($_GET['user']) ? $_GET['user'] : "";
		require("loginDatabase.php");
		if( $_GET['user'] == "T")
		{
			echo("New Employee successfully added ");
			include("header.html");
		}
		else
		{
			$today = mktime(0,0,0, date("m"),date("d"), date("y"));
			$present= date("Y/m/d", "$today")."<br>"; 
			echo $present; 
			//$logindate= mysql_query("INSERT INTO signInDetails (signIn,id) VALUES (NOW(),'".$empid."')");
			mysql_query("INSERT INTO signInDetails (signIn,id,date) VALUES (NOW(),'".$empid."','".$present."')");
			include("header.html");
		}
		
		
	}
	
}
?>
