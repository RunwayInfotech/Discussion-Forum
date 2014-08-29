<?php
class Signout extends CI_Controller 
{
	public function index()
	{ 
	     session_start();
		 $empid = $_SESSION['empid'];
		$this->load->model('signout_model');
		$this->signout_model->out(); 
		//$this->load->view('userhome_view');
		
	}
}
?>