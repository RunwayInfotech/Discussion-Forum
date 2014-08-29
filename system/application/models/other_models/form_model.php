<?php 
class Form_model extends CI_Controller
{  
  public function index()
	{
		$name         	= $_post['name'];
		$email        	= $_post['email'];
		$gender       	= $_post['publisher'];
		$graduation   	= $_post['year'];
		$postgraduation = $_post['available'];
		$intermediate   = $_post['intermediate'];
		$highschool     = $_post['highschool'];
		$stream         = $_post['stream'];
		$address        = $_post['address'];
		
		$this->db->query(" INSERT INTO student(name,email,browse,graduation,intermediate,highschool,stream,address) VALUES('$_POST[name]','$_POST[email]','$path','$_POST[graduation]','$_POST[intermediate]','$_POST[highschool]','$_POST[stream]','$_POST[address]')");
	}
}	 

?>