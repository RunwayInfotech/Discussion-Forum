<?php
class Selectskills extends CI_Controller  {
	public function selectphp() {
		session_start();
		$this->load->model('list_questions');
		$var['data']=$this->list_questions->loadphp();
	    $this->load->view('showphp',$var);
	}
	
	public function selectandroid()  {
		session_start();
		$this->load->model('list_questions');
		$var['data']=$this->list_questions->loadandroid();
		$this->load->view('showandroid',$var);
	}
	
	public function selectios() {
		session_start();
		$this->load->model('list_questions');
		$var['data']=$this->list_questions->loadios();
		$this->load->view('showios',$var);
    }	
}


?>