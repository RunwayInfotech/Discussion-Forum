<?php
class Candidate extends CI_Controller 
{
	public function getAll()
	{
		$this->load->model('candidate_model');
		$data['query']= $this->candidate_model->candidate_getall();
		$this->load->view('candidate_viewall',$data);
	}
	function Get()
	{
		$this->load->model('candidate_model');
		$data['query']=$this->candidate_model->candidate_get();
		$this->load->view('candidate_view',$data);
	   	
	}
	function register()
	{
	  $this->load->model('candidate_model');
	  $data['query']=$this->candidate_model->candidate_get();
	  $this->load->view('candidate_view',$data);
	}
}
?>