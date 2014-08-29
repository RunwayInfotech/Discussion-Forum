<?php
class edit_answer extends CI_controller {
	public function edit() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}	 
	   if(isset($_GET['var11']))  $data= $this->input->get('var11');
		$this->load->model('update_answer_model');
		$this->update_answer_model->update($data);

}
}
?>