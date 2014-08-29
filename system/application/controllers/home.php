<?php
class Home extends CI_Controller 
{
	public function index()
	{   
		session_start();
		$this->load->model('home_model');
		$data['query'] = $this->home_model->employee_getall();
		$data['query1'] = $this->home_model->employee_get();
	// "<pre>";
		//print_r($data);
		//exit;	
		$this->load->view('home_view',$data);
	}
}
?>