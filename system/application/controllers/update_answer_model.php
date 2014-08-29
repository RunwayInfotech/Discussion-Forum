<?php
class update_answer_model extends CI_model  {
   public function update($data) {
	   $this->load->database();
	   $this->db->update('answer',$data);
   }
}
?>