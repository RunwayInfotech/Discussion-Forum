<?php
class candidate extends CI_Controller {
public function GetAll()
 {
   $this->load->model->("candidate");
   $data['query']= $this->candidate_model->candidate_getall();
   $this->load->view('candidate_viewall',$data);
   }
 }
?>