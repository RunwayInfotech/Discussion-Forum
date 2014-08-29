<?php
class Userupdate extends CI_Controller 
{
	public function index()
	{    
		session_start();
			$empid = $_SESSION['empid'];
			$this->load->model('userupdate_model');
			$this->userupdate_model->update();
			//$this->signout_model->update();		
			//$this->load->view('userhome_view');
		
	}
	public function edit()
	{  		
		 session_start();
		 $empid = $_SESSION['empid'];
		//echo "hello";
		$this->load->model('userupdate_model');
		$data['query'] = $this->userupdate_model->edit($empid);
		$this->load->view('update',$data);
	}
	
	function register()
	{
	  $this->load->model('register_model');
	  $data['query']=$this->register_model->register();
	  //$this->load->view('userhome_view',$data);
	  header('Location: http://localhost/Attendence/index.php/userhome');

	}

}
?>