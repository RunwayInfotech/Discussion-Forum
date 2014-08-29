 <?php

class Showanswer extends CI_controller {
  public function answer() {
	  if (session_status() == PHP_SESSION_NONE) {
  		  session_start();
		}	 
	  if(isset($_GET['var1']))  
	  $data= $this->input->get('var1');
	  else  $data=$_SESSION['questionid'];
	  $this->load->model('fetch_answer');
	  $var['data1']=$this->fetch_answer->answer_ques_data($data);
	  $var['data2']=$this->fetch_answer->answer_data($data); 
	    if(isset($_GET['var2']))  {
		   $seen= $this->input->get('var2');
		   $e_id= $this->input->get('var3');
		   $this->load->model('update_seen_status');
		   $this->update_seen_status->seen_status($seen,$data,$e_id);
	  }
	  $this->load->view('view_answer',$var);
  }

	  public function add()
	{
		 if (session_status() == PHP_SESSION_NONE) {
			  session_start();
			}
		if($_POST && $_POST['message'] != NULL) {
			$message['message'] = $this->input->xss_clean($_POST['message']);
			$this->load->model('fetch_answer');
		   $this->fetch_answer->check_like_status($message);
		} else
			redirect('message/view');
	}
}
?>
