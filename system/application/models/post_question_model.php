<?php
class post_question_model extends CI_model {
	public function postphp() {
			   $title= $this->input->post('title');
			   $detail=$this->input->post('detail');
			   $detail= $detail;
			   $email=$this->input->post('tag');
			   if(isset($_POST['check'])) {
				    $check = 1;
			   }
			   else 	 $check=0;
			   date_default_timezone_set("Asia/Calcutta");
			   $todaydate= date('d-m-Y'); 
			   $todaytime= date('H:i:s'); 
			   $id=$_SESSION['empid'];
			   $data=array(
			   'topic' => $title,
			   'detail' => $detail,
			   'pdate' => $todaydate,
			   'qtime' =>  $todaytime,
			   'employee_id' => $id,
			   'skill' => 'php',
			   'tag' => $email,
			   'send_mail' => $check
			   );
			   $query=$this->db->insert('question',$data);
			   $arr=explode(' ',trim($email));
			   $mailvar=mysql_query("SELECT email FROM registrationdetails WHERE fname='".$arr[0]."'");
			   $x=mysql_fetch_row($mailvar);
			   $mailx=$x[0];
			   $subject="TreeWalker Discussion Forum";
			   $message= " Someone tagged you in the forum query. Please Visit The Forum Page";
			   if( $check == 1) mail($mailx,$subject,$message);
			   
			   $qid=mysql_query("SELECT q_id 
			   FROM question 
			   WHERE pdate='".$todaydate."' AND 
			   qtime='".$todaytime."' AND
			   employee_id='".$id."'");
			   $qid=mysql_fetch_row($qid);
			   $qid=$qid[0];
			   
			   $tag_eid=mysql_query("SELECT employee_id 
			   FROM registrationdetails 
			   WHERE email='".$mailx."'");
			   $y=mysql_fetch_row($tag_eid);
			   $tag_eid=$y[0];
			   $data=array(
			   'tag_eid' => $tag_eid,
			   'employee_id' => $id,
			   'seen_status' =>  1,
			   'qid' => $qid 
			   );
			   $query=$this->db->insert('notification',$data);
	}
	
	public function postandroid() {
			   $title= $this->input->post('title');
			   $detail=$this->input->post('detail');
			   $detail= $detail;
			   $email=$this->input->post('tag');
			   if(isset($_POST['check'])) {
				    $check = 1;
			   }
			   else 	 $check=0;
			   date_default_timezone_set("Asia/Calcutta");
			   $todaydate= date('d-m-Y'); 
			   $todaytime= date('H:i:s'); 
			   $id=$_SESSION['empid'];
			   $data=array(
			   'topic' => $title,
			   'detail' => $detail,
			   'pdate' => $todaydate,
			   'qtime' =>  $todaytime,
			   'employee_id' => $id,
			   'skill' => 'android',
			   'tag' => $email,
			   'send_mail' => $check
			   );
			   $query=$this->db->insert('question',$data);
			   $arr=explode(' ',trim($email));
			   $mailvar=mysql_query("SELECT email FROM registrationdetails WHERE fname='".$arr[0]."'");
			   $x=mysql_fetch_row($mailvar);
			   $mailx=$x[0];
			   $subject="TreeWalker Discussion Forum";
			   $message= " Someone tagged you in the forum query. Please Visit The Forum Page";
			   if( $check == 1) mail($mailx,$subject,$message);
			   
			    $qid=mysql_query("SELECT q_id 
			   FROM question 
			   WHERE pdate='".$todaydate."' AND 
			   qtime='".$todaytime."' AND
			   employee_id='".$id."'");
			   $qid=mysql_fetch_row($qid);
			   $qid=$qid[0];
			   
			   $tag_eid=mysql_query("SELECT employee_id 
			   FROM registrationdetails 
			   WHERE email='".$mailx."'");
			   $y=mysql_fetch_row($tag_eid);
			   $tag_eid=$y[0];
			   $data=array(
			   'tag_eid' => $tag_eid,
			   'employee_id' => $id,
			   'seen_status' =>  1,
			   'qid' => $qid 
			   );
			   $query=$this->db->insert('notification',$data);
	}
	public function postios() {
			    $title= $this->input->post('title');
			   $detail=$this->input->post('detail');
			   $detail= $detail;
			   $email=$this->input->post('tag');
			   if(isset($_POST['check'])) {
				    $check = 1;
			   }
			   else 	 $check=0;
			   date_default_timezone_set("Asia/Calcutta");
			   $todaydate= date('d-m-Y'); 
			   $todaytime= date('H:i:s'); 
			   $id=$_SESSION['empid'];
			   $data=array(
			   'topic' => $title,
			   'detail' => $detail,
			   'pdate' => $todaydate,
			   'qtime' =>  $todaytime,
			   'employee_id' => $id,
			   'skill' => 'ios',
			   'tag' => $email,
			   'send_mail' => $check
			   );
			   $query=$this->db->insert('question',$data);
			   $arr=explode(' ',trim($email));
			   $mailvar=mysql_query("SELECT email FROM registrationdetails WHERE fname='".$arr[0]."'");
			   $x=mysql_fetch_row($mailvar);
			   $mailx=$x[0];
			   $subject="TreeWalker Discussion Forum";
			   $message= " Someone tagged you in the forum query. Please Visit The Forum Page";
			   if( $check == 1) mail($mailx,$subject,$message);
			   
			    $qid=mysql_query("SELECT q_id 
			   FROM question 
			   WHERE pdate='".$todaydate."' AND 
			   qtime='".$todaytime."' AND
			   employee_id='".$id."'");
			   $qid=mysql_fetch_row($qid);
			   $qid=$qid[0];
			   
			   $tag_eid=mysql_query("SELECT employee_id 
			   FROM registrationdetails 
			   WHERE email='".$mailx."'");
			   $y=mysql_fetch_row($tag_eid);
			   $tag_eid=$y[0];
			   $data=array(
			   'tag_eid' => $tag_eid,
			   'employee_id' => $id,
			   'seen_status' =>  1,
			   'qid' => $qid 
			   );
			   $query=$this->db->insert('notification',$data);
	}	
}
?>
