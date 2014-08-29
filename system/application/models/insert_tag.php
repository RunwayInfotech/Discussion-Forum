<?php
 class insert_tag extends CI_model  {
		public function insert($arr,$n)  {
			$this->load->database();
			for($a=1;$a<=$n;$a++)   $arr[$a];
			 $empid=$_SESSION['empid'];
			$tag_query=mysql_query("SELECT employee_id FROM registrationdetails 
					WHERE  employee_id !='".$empid."' ");
		     $check_table_set=mysql_query("SELECT employee_id FROM tag_eid 
					WHERE  EXISTS (SELECT employee_id FROM tag_eid)");
		$x=0;
		while($row = mysql_fetch_array($check_table_set)) {
		 $x= $row['employee_id'] ;
		}
		if($x==NULL)  {		
				while($row = mysql_fetch_assoc($tag_query))
					{
						 $data=array(
						'employee_id'=>$empid,
						'tag_eid' => $row['employee_id'],
						 'dont_tag_status' => 0);
						 $this->db->insert('tag_eid',$data);
				   }
			}
			else {
				 $d=array( 'dont_tag_status' => 0);
				 $this->db->where('employee_id',$empid);
				 $this->db->update('tag_eid',$d);
			     for($a=1;$a<=$n;$a++)  {	
				 $data=array( 'dont_tag_status' => 1);
				 $this->db->where('employee_id',$empid) && $this->db->where('tag_eid',  $arr[$a]);
				 $this->db->update('tag_eid',$data);
				 }
			}
		}
 }
?>