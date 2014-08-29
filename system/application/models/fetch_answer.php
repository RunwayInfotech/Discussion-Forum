<?php
class fetch_answer  extends CI_model {
	public function answer_ques_data($data) {
		$empid= $_SESSION['empid'];
		$query=$this->db->query("SELECT   				fname,lname,topic,detail,pdate,qtime,status,reply,q_id	,skill, question.employee_id AS eq_id	
		FROM question,registrationdetails
		WHERE  registrationdetails.employee_id=question.employee_id 
						AND question.q_id='".$data."'");	
				$res= $query->result();
				$rew = $res[0];    
			$_SESSION['qid']=$rew->q_id;
			$_SESSION['skill']=$rew->skill;
			foreach($query->result() as $row) {
				$var['fname']=$row->fname;
				$var['lname']= $row->lname;
				$var['topic']=$row->topic;
				$var['detail']=$row->detail;
				$var['pdate']=$row->pdate;
				$var['qtime']=$row->qtime;
				$var['status']=$row->status;
				$var['reply']=$row->reply;
				$var['q_id']=$row->q_id;
				$var['eq_id']=$row->eq_id;
			}	
			return $var;
	}
	
	public function answer_data($data) {
		$empid= $_SESSION['empid'];
		$query=$this->db->query("SELECT  
			answer.id,answer,adate,atime,fname,lname,q_id,likes,answer.employee_id AS ea_id,like_status		
		FROM answer,registrationdetails,like_answers
		WHERE registrationdetails.employee_id=answer.employee_id 
		AND	 answer.q_id='".$data."' 
		AND  answer.id=like_answers.id 
		AND  like_answers.employee_id='".$empid."'");
		//AND	 like_status IN 
		//			( SELECT like_status
			//			FROM  like_answers
			//			WHERE like_answers.employee_id='".$empid."' AND  id IN (
				//																				SELECT id FROM answer WHERE 																			      			//												 answer.q_id='".$data."' ))");	
		    $i=1;
			foreach($query->result() as $row) {
				$var['a'.$i]['answer']=$row->answer;
				$var['a'.$i]['adate']= $row->adate;
				$var['a'.$i]['atime']=$row->atime;
				$var['a'.$i]['fname']=$row->fname;
				$var['a'.$i]['lname']=$row->lname;
				$var['a'.$i]['ea_id']=$row->ea_id;	
				$var['a'.$i]['q_id']=$row->q_id;
				$var['a'.$i]['id']=$row->id;
				$var['a'.$i]['likes']=$row->likes;
				$var['a'.$i]['like_status']=$row->like_status;
				$i++;
			}	
			//$query2=$this->db->query("SELECT  like_status	 FROM like_answers,answer 
			//WHERE like_answers.employee_id=answer.employee_id AND
			//			like_answers.employee_id='".$empid."' AND q_id='".$data."' ");
			//$i=1;	
			//foreach($query2->result() as $row) {
			//	$var['a'.$i]['like_status']=$row->like_status;
			//	$i++;
			//}
    if(isset($var)) 		
	return $var;		
	else return NULL;
	}		
	
	public function check_like_status($message) {
		$empid= $_SESSION['empid'];
		$data = array(
   'employee_id' => $empid ,
   'id' => '1',
   'status' => $message
);
		$this->db->insert('like_answer', $data);																					
	}
	
}
?>