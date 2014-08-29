<?php  
class askquestion extends CI_controller  {
	public function askphp() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewphp',$var);
	}
	public function askandroid() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewandroid',$var);
	}
	public function askios() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$this->load->model('fetch_email');
		$var['name']=$this->fetch_email->email();
		$this->load->view('ask_question_viewios',$var);
	}
}
?>