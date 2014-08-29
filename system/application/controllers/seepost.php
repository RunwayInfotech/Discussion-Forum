<?php   

class Seepost extends CI_controller {
	 public function post() {
		 $this->load->model('model1');
	    $data=$this->model1->model12();
		foreach($data as $row) {
			if(isset($row->php)) $data['php']=$row->php;
			if(isset($row->android)) $data['android']=$row->android;
			if(isset($row->ios)) $data['ios']=$row->ios;
		}
		$this->load->view('myforum1',$data);
	 }
}
?>