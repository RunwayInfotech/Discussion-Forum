<?php
class new_answer_model extends CI_model {
	public function answer($data) {
		$empid=$_SESSION['empid'];
		$qid=$_SESSION['qid'];
		date_default_timezone_set("Asia/Calcutta");
		$todaydate= date('d-m-Y'); 
	    $todaytime= date('H:i:s'); 
		$this->load->database();
		$data=array(
		'q_id' => $qid,
		'employee_id' =>$empid,
		'answer'=>$data,
		'adate'=>$todaydate,
		'atime' =>$todaytime);
		$this->db->insert('answer',$data);
		// to set the Like flag
		$like_answerid=mysql_query("SELECT id FROM answer WHERE adate='".$todaydate."' 
		AND atime='".$todaytime."' ");
		$x=mysql_fetch_array($like_answerid);
		 $like_query=mysql_query("SELECT employee_id FROM registrationdetails");
		while($row = mysql_fetch_assoc($like_query))
			{
				 $data=array(
				'employee_id'=>$row['employee_id'],
				'id' => $x['id'],
				 'like_status' => 0);
			 	 $this->db->insert('like_answers',$data);
	       }
		$result=mysql_query("SELECT answer		
		FROM answer,registrationdetails
		WHERE registrationdetails.employee_id=answer.employee_id 
		AND	 answer.q_id='".$qid."'" );
		$num=mysql_num_rows($result);
		$data2=array( 'reply' => $num);
		 $this->db->where('q_id',$qid);
	     $this->db->update('question',$data2);
		$query1=mysql_query("SELECT send_mail FROM question WHERE q_id='".$qid."'");
		$x1=mysql_fetch_row($query1);
		if($x1[0]==1) {
			$query2=mysql_query("SELECT question.employee_id FROM question,answer 
										WHERE question.q_id='".$qid."'");
			$x2=mysql_fetch_row($query2);
			$query3=mysql_query("SELECT email FROM registrationdetails,question 
												WHERE registrationdetails.employee_id='".$x2[0]."'");
			$x3=mysql_fetch_row($query3);
			$mailx=$x3[0];
			$query4=mysql_query("SELECT topic FROM question
												WHERE q_id='".$qid."'");
			$x4=mysql_fetch_row($query4);
			$topic=$x4[0];
		    $subject="TreeWalker Discussion Forum";
			$message= " Someone has posted an answer to your '".$topic."' query in the forum query. 
								Please Visit The Forum Page";
			 //mail($mailx,$subject,$message);
		}
		
	}
	
	public function answersolved($a)  {
		$empid=$_SESSION['empid'];
		$qid=$_SESSION['qid'];
		 $this->load->database();
		 $data=array( 'status' => $a);
		 $this->db->where('employee_id',$empid) && $this->db->where('q_id',$qid);
	     $this->db->update('question',$data);
	}
	public function like_answer($a,$b,$c) {
		 $empid=$_SESSION['empid'];
		 $qid=$_SESSION['qid'];
		 $this->load->database();
		 $data=array( 'like_status' => $a);
		 $this->db->where('employee_id',$empid) && $this->db->where('id',$b);
	     $this->db->update('like_answers',$data);
		  $data=array( 'likes' => $c);
		  $this->db->where('id',$b);
	     $this->db->update('answer',$data);
	}
}
?>