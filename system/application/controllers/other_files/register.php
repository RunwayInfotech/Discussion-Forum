<?php 
class Register extends CI_Controller
{
    public function index()
	{
		$this->load->view('register_view.php');// loading form view
	}
	public function insert_to_db()
	{
	    $this->load->model('register_model');
		$this->site_model->insert_to_db();
		//$this->load->view('success');//loading success view
	}
	 
}
//a href="http://localhost/uhtco/aplicacion/idiomas/EN/ 
?>
