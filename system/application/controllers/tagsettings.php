<?php  
class tagsettings extends CI_controller  {
	public function tag() {
		if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}
		$this->load->model('tag_model');
		$var['tag_name']=$this->tag_model->checkbox_show_model();
		$this->load->view('tag_forum',$var);
	}
	
}
?>