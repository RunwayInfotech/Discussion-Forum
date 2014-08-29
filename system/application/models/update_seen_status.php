 <?php

class update_seen_status extends CI_controller {
  public function seen_status($seen,$qid,$e_id) {
	 $empid = $_SESSION['empid'];
	 $qid;
	 $e_id;
	 $data = array(
               'seen_status' => $seen
            );
	$this->db->where('tag_eid', $empid);
	$this->db->where('qid', $qid);
	$this->db->where('employee_id', $e_id);
	$this->db->update('notification', $data); 
  }
}
?>
