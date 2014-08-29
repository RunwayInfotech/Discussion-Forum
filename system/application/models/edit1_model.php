<?php
class edit1_model extends CI_Model
{   
     public function index()
	{
      $this->load->view('you_view');
	}
	public function edit($id)
	{        		
		$this->load->database();
		//$today = mktime(0,0,0, date("m"),date("d"), date("y"));
		//$present= date("Y-m-d", "$today")."<br>";			
		$query = $this->db->query("select * from registrationdetails where employee_id = '".$id."'");			
		return $query->result(); 			
	}	
	public function update()
	{
		$this->load->database();
		$query = $this->db->query("update registrationdetails set  fname='".$_POST['fname']."' , lname='".$_POST['lname']."', email='".$_POST['email']."', address='".$_POST['address']."',phone_no='".$_POST['phone_no']."', B_day='".$_POST['B_day']."'  where employee_id = '".$_POST['employee_id']."'");
		return $query;
	}
	public function delete($id)
	{
		$this->load->database();
		 $query = $this->db->query("DELETE FROM registrationdetails WHERE employee_id = '".$id."'");		
		return $query;
	}
}
?>
