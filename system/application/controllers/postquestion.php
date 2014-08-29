<?php

class postquestion extends CI_controller {
   public function postphp() {
	   session_start();
	   $this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		if( $this->form_validation->set_rules('title','titlew','required') &&
		$this->form_validation->set_rules('detail','dw','required') ) {
		if($this->form_validation->run()==TRUE) {
				    $this->load->model('post_question_model');
				    $this->post_question_model->postphp();
				    $this->load->model('list_questions');
					$var['data']=$this->list_questions->loadphp();
					$this->load->view('showphp',$var);				
		}
		else {
				//$this->load->view('forumview');
				header('Location: http://localhost/Attendence/index.php/toaskquestion/phpagain');	
		}
		}		
   }
   public function postandroid() {
	  session_start();
	   $this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		if( $this->form_validation->set_rules('title','titlew','required') &&
		$this->form_validation->set_rules('detail','dw','required') ) {
		if($this->form_validation->run()==TRUE) {
				    $this->load->model('post_question_model');
				    $this->post_question_model->postandroid();
				    $this->load->model('list_questions');
					$var['data']=$this->list_questions->loadandroid();
					$this->load->view('showandroid',$var);				
		}
		else {
				//$this->load->view('forumview');
				header('Location: http://localhost/Attendence/index.php/toaskquestion/androidagain');	
		}
		}	
   }
   public function postios() {
	  session_start();
	   $this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		if( $this->form_validation->set_rules('title','titlew','required') &&
		$this->form_validation->set_rules('detail','dw','required') ) {
		if($this->form_validation->run()==TRUE) {
				    $this->load->model('post_question_model');
				    $this->post_question_model->postios();
				    $this->load->model('list_questions');
					$var['data']=$this->list_questions->loadios();
					$this->load->view('showios',$var);				
		}
		else {
				//$this->load->view('forumview');
				header('Location: http://localhost/Attendence/index.php/toaskquestion/iosagain');	
		}
		}	
   }
}
?>