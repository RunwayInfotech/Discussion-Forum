<?php
 class tag_model extends CI_model  {
		public function checkbox_show_model()  {
			$this->load->database();
		    $e=$_SESSION['empid'];
			
			 $empid=$_SESSION['empid'];
			$tag_query=mysql_query("SELECT employee_id FROM registrationdetails 
					WHERE  employee_id !='".$empid."' ");
		     $check_table_set=mysql_query("SELECT employee_id FROM tag_eid 
					WHERE  employee_id='".$empid."' ");
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
			
			$query=$this->db->query(
			"SELECT   fname,lname,registrationdetails.employee_id AS e,dont_tag_status	
								FROM registrationdetails,tag_eid
								WHERE registrationdetails.employee_id <> '".$e."' AND
								 tag_eid.employee_id= '".$e."' AND
								 tag_eid.tag_eid=registrationdetails.employee_id  ");
			 $i=1;
			foreach($query->result() as $row) {
				$var['a'.$i]['employee_id']=$row->e;
				$var['a'.$i]['fname']=$row->fname;
				$var['a'.$i]['lname']=$row->lname;
				$var['a'.$i]['dont_tag_status']=$row->dont_tag_status;
				$i++;
			}	
			return $var;
		}
 }
?>