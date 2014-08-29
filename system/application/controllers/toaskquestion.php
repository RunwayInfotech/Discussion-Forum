<?php  

class toaskquestion extends CI_controller  {
     public function phpagain()  {
		    session_start();
	       $this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewphp',$var);
	 }
	 public function androidagain()  {
		    session_start();
	       $this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewandroid',$var);
	 }
	 public function iosagain()  {
		    session_start();
	       $this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewios',$var);
	 }
}
?>