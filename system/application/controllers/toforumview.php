<?php  

class Toforumview extends CI_controller  {
     public function index()  {
		    session_start();
			$this->load->model('checksetcategory');
			$returnval=$this->checksetcategory->checkcategory();
			if($returnval == true ) {
				     $this->load->model('notification_fetch');
					 $var['data']=$this->notification_fetch->fetch();
					$this->load->view("myforum",$var);
			}
			else   $this->load->view("forumview"); 
	 }
}

?>