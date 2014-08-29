<?php
 class Notification_fetch extends CI_model  {
	 public function fetch()  {
		  $this->load->database();
		  $empid = $_SESSION['empid'];
		  $query=$this->db->query(" SELECT notification.employee_id,skill,q_id,fname,lname
		  FROM notification,question,registrationdetails
		  WHERE tag_eid='".$empid."' AND
		  question.q_id=notification.qid AND
		  registrationdetails.employee_id=notification.employee_id AND
		  seen_status=1");
		   $i=1;
		  foreach($query->result() as $row)  {
			 $var['a'.$i]['employee_id']= $row->employee_id; 
			 $var['a'.$i]['skill']= $row->skill;
			 $var['a'.$i]['q_id']= $row->q_id;
			 $var['a'.$i]['fname']= $row->fname;
			 $var['a'.$i]['lname']= $row->lname;
			   $i++; 
		  }
		 if(isset($var)) return $var;
	 }
}
?>
