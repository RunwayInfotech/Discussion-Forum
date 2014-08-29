<?php 
class Registers extends CI_Controller
{ 
  public function index()
	{
	 
	 //echo"abc index";	  
	   $this->load->helper('date_helper');
       // echo timezone_menu('');
		        
		$this->load->view('register_view.php');// loading form view
		//echo test_method('Hello World');
	}
	public function insert_to_db()
	{   
	    //echo "insert_to_db";
	    //$this->load->database('mydata');		
		$this->load->model('register_model');
		$this->register_model->insert_to_db();
		$this->load->view('success');//loading success view
	}
}	 
//a href="http://localhost/uhtco/aplicacion/idiomas/EN/ 
?>
