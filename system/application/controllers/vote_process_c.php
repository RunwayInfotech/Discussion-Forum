<?php
class vote_process_c extends CI_Controller 
{
	public function vote()
	{
	     session_start();
		 if($_POST) {
			 $user_vote_type = trim($_POST["vote"]);
			 $unique_content_id = filter_var(trim($_POST["unique_id"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
			 $data=array(  0 => $user_vote_type,
			 						1 => $unique_content_id );
		 }
		$this->load->model('vote_process');
		
		$this->vote_process->index($data);
		
        $this->load->view('view_answer');
	}
	
	public function vote2()  {
		session_start();
		$term=$_GET["term"];
		$this->load->model('vote_process');
		
		$this->vote_process->index2($term);
		
        $this->load->view('view_answer');
	}
}
?>