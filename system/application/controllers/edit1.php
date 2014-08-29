<?php
class Edit1 extends CI_Controller 
{
	public function index()
	{    
		$id=$_GET['id'];
	    session_start();
		$_SESSION['id']=$id;
		$this->load->model('edit1_model');		
		$data['query']= $this->edit1_model->edit($id);	
		//echo "<pre>";print_r($data['query']);exit;
        $this->load->view('edit1view', $data);
	}
	public function update()
	{    
		//echo $_POST['employee_id'];echo $_REQUEST['fname'];exit;
		$this->load->model('edit1_model');
		$data['query']= $this->edit1_model->update();	
		header('location:http://localhost/Attendence/index.php/userhome');
	}
	public function delete()
	{    
		$id = $_GET['id'];
		$this->load->model('edit1_model');
		$data['query']= $this->edit1_model->delete($id);	
		header('location:../userhome');
	}
}
?>