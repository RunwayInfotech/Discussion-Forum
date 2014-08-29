<?php
class Adminpost extends CI_Controller 
{
	public function index()
	{

	 //echo"abc index";	  
	   $this->load->helper('date_helper');
       // echo timezone_menu('');
		        
		$this->load->view('home_view.php');// loading form view
		//echo test_method('Hello World');
	}
	public function edit_post()
	{   
		session_start();
		$this->load->model('adminpost_model');
		$this->adminpost_model->edit_post();
		//$this->load->view('success');//loading success view
	}
}
?>