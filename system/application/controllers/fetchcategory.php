<?php  
	
class Fetchcategory extends CI_controller {
	
	public function fetch()  {
		session_start();
 		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		if( $this->form_validation->set_rules('category1','php','') ||
		$this->form_validation->set_rules('category2','android','required') ||
		$this->form_validation->set_rules('category3','ios','required')   ) {
		if($this->form_validation->run()==TRUE) {
				
				if($this->input->post('category1')==TRUE)  $x=1;  else  $x=0;
				if($this->input->post('category2')==TRUE)  $y=1;  else  $y=0;
				if($this->input->post('category3')==TRUE)   $z=1;  else  $z=0;
				$array = array(  
				  0 => $x,
				 1 => $y,
				  2 => $z
				);
				$this->load->model('insertcategory');
				$returnval = $this->insertcategory->insert($array);
				if ($returnval == true)  
							$this->load->view('success');			
		}
		else {
				//$this->load->view('forumview');
				header('Location: http://localhost/Attendence/index.php/toforumview');	
		}
		}
		//if($_POST) {
		//	$this->load->model('insertcategory');
		//$this->insertcategory->insert($_POST['category']);
		//}
	//	else {
					
//		  }	
		
	}
}
?>