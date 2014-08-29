<?php 
class Login extends CI_Controller
{ 
  public function index()
	{
	 
	 //echo"abc index";	  
	   $this->load->helper('date_helper');
 
		$this->load->view('login_view.php');// loading form view
		//echo test_method('login here');
	}
	public function login_here()
	{   
	    //echo "login_here";
	    //$this->load->database('mydata');		
		$this->load->model('login_model');
		$this->login_model->login_here();
		//$this->load->view('success');//loading success view
	}
}	 
//a href="http://localhost/uhtco/aplicacion/idiomas/EN/ 
?>