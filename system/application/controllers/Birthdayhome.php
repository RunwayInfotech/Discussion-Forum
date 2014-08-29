<?php
class Birthdayhome extends CI_Controller 
{
	public function index()
	{
	     session_start();
		$this->load->model('Birthdayhome_model');
		$this->Birthdayhome_model->birthday();
		//$data['query']= $this->candidate_model->home_getall();	
	}
}
?>