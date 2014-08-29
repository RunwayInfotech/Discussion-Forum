<?php  

class insertcategory extends CI_model  {
	
	public function insert($myarr)  {
		  $empid = $_SESSION["empid"];
		  $this->load->database();
	      $data=array(
		  'php' => $myarr[0],
		   'android' => $myarr[1],
		   'ios' => $myarr[2]);
		   $this->db->where('employee_id',$empid);
	if( $this->db->update('registrationdetails',$data) )    return true;
	else  return false;
	
	 // foreach($this->input->post('category') as $array ) 
		   //$this->db->insert('category',$array);
	//  }
	}
}
?>