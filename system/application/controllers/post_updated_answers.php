<?php
class Post_updated_answers extends CI_controller {
	public function answer() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$data=$this->input->post('textarea');
		$this->form_validation->set_rules('textarea','textarea','required');
		if($this->form_validation->run()==TRUE)  {
			$this->load->model('new_answer_model');
	    	$this->new_answer_model->answer($data);
			 $this->load->controller('showanswer');
			 $this->showanswer->answer();
		}
		else {
			 $this->load->controller('showanswer');
			 $this->showanswer->answer();	
		}
	}
	
	public function answersolved() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$a= $this->input->post('submitsolved');
		$this->load->model('new_answer_model');
		if($a=="UnSolved") {
			$a=0;
			$this->new_answer_model->answersolved($a);
		}
		else{ 
			$a=1;
			$this->new_answer_model->answersolved($a);
		}
			 $this->load->controller('showanswer');
			 $this->showanswer->answer();
	}
	
	public function like_answer() { 
	   if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$a= $this->input->post('likeit');
		$b= $this->input->post('answer_id');
		$c= $this->input->post('like_count');
		$this->load->model('new_answer_model');
		if($a=="Liked") {
			$a=0;
			$c=$c-1;
			$this->new_answer_model->like_answer($a,$b,$c);
		}
		else{ 
			$a=1;
			$c=$c+1;
			$this->new_answer_model->like_answer($a,$b,$c);
		}
		$this->load->controller('showanswer');
		$this->showanswer->answer();
	}
}
?>