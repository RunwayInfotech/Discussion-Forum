<?php  

class delete_model extends CI_model  {
	
	public function delete_post($data)  {
		  $empid = $_SESSION["empid"];
		  $this->load->database();
		  $result0=mysql_query("SELECT q_id FROM answer WHERE id='".$data."'  " );
		  $query=$this->db->query("DELETE FROM answer WHERE id='".$data."'");
		  if(!$query) {
			  echo " Data not deleted".mysql_error();
		  }
		$x=mysql_fetch_array($result0);
		$qid=$x['q_id'];
		$result=mysql_query("SELECT answer		
		FROM answer,registrationdetails
		WHERE registrationdetails.employee_id=answer.employee_id 
		AND	 answer.q_id='".$qid."'" );
		$num=mysql_num_rows($result);
		$data2=array( 'reply' => $num);
		$this->db->where('q_id',$qid);
	    $this->db->update('question',$data2);
		  
	}
}
?>