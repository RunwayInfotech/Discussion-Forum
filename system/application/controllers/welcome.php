<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index() {
		$this->load->model('user_model');
		$var['query']=$this->user_model->index();
		$this->load->view('forumview',$var);			
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>