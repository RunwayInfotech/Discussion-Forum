<?php
class delete extends CI_controller {
	public function delete_post() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}	 
	   if(isset($_GET['var11']))  $data= $this->input->get('var11');
	   $this->load->model('delete_model');
	   $this->delete_model->delete_post($data);
	   $this->load->controller('showanswer');
	   $this->showanswer->answer();
	}
}
?>