<?php

class list_questions extends CI_model  {
		public function loadphp() {
				$this->load->database();
				$empid=$_SESSION['empid'];
				$query=$this->db->query("SELECT q_id,topic,pdate,reply 
											FROM question
											WHERE  skill='php' ");
			$i=1;
			foreach($query->result() as $row) {
				$var['a'.$i]['q_id']=$row->q_id;
				$var['a'.$i]['topic']= $row->topic;
				$var['a'.$i]['pdate']=$row->pdate;
				$var['a'.$i]['reply']=$row->reply;
				$i++;
			}
		 if(isset($var)) return $var;
		}
		
		public function loadandroid() {
				$this->load->database();
				$empid=$_SESSION['empid'];
				$query=$this->db->query("SELECT q_id,topic,pdate,reply 
											FROM question
											WHERE  skill='android' ");
			$i=1;
			foreach($query->result() as $row) {
				$var['a'.$i]['q_id']=$row->q_id;
				$var['a'.$i]['topic']= $row->topic;
				$var['a'.$i]['pdate']=$row->pdate;
				$var['a'.$i]['reply']=$row->reply;
				$i++;
			}
		 if(isset($var)) return $var;
		}
		
		public function loadios() {
				$this->load->database();
				$empid=$_SESSION['empid'];
				$query=$this->db->query("SELECT q_id,topic,pdate,reply 
											FROM question
											WHERE  skill='ios' ");
			$i=1;
			foreach($query->result() as $row) {
				$var['a'.$i]['q_id']=$row->q_id;
				$var['a'.$i]['topic']= $row->topic;
				$var['a'.$i]['pdate']=$row->pdate;
				$var['a'.$i]['reply']=$row->reply;
				$i++;
			}
		 if(isset($var)) return $var;
		}
}
?>