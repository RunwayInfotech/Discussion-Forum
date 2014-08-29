<?php
class Edit extends CI_Controller 
{
	public function index()
	{   
		session_start();
		$this->load->model('edit_model');
	    $this->edit_model->edit_info();
		//echo "<pre>";
		//print_r($data);
		//exit;	
		$this->load->view('userhome_view');
	}
	
}
?>