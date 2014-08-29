<?php
class Register extends CI_Controller 
{
	public function register()
	{
	  $this->load->model('register_model');
	  $data['query']=$this->register_model->register();
	  $this->load->view('userhome_view',$data);
	}
}
?>