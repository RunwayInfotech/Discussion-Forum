<?php
class Userhome extends CI_Controller 
{
	public function index()
	{
	     session_start();
		$this->load->model('userhome_model');
		//$this->userhome_model->hello();
		$data['query'] = $this->userhome_model->hello();
		//$this->load->view('userhome_view');		
        $this->load->view('userhome_view', $data);
	}
}
?>