<?php 
class Logedin extends CI_Controller
{ 
  public function index()
	{
	   $this->load->helper('date_helper');		        
		$this->load->view('you_view.php');// loading form view
	}
	public function validate_in_db()
	{   
	    //echo "insert_to_db";
	    //$this->load->database('mydata');		
		$this->load->model('logedin_model');
		$this->logedin_model->validate_in_db();
		$_SESSION['empid'] = $_POST['empid'];
	}
}	 
?>
