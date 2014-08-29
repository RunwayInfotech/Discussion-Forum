<?php
class show_edit extends CI_controller {
	public function edit() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}	 
	   if(isset($_GET['var11']))  $data= $this->input->get('var11');
	   $_SESSION['edit']=$data;
		$this->load->controller('showanswer');
			 $this->showanswer->answer();
  }
}
?>