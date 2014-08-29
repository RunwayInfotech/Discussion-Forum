<?php  
	
class Fetchtag extends CI_controller {
	
	public function fetch()  {
		session_start();
		$setvalue=0;
	    $i=$this->input->post("username");
		--$i;
		
	//	$j=1; //this loop is to check if non selected
	//	while($j<=$i)  {
	//	$x= "category". "$j" ;
	//	  if($this->input->post("$x")==TRUE) $setvalue=1;
	//	  $j++;
	//		} 
	//	if( $setvalue==0)  { // this is to check  if non selected
	//		header('Location: http://localhost/Attendence/index.php/tagsettings/tagphp');
	//		 exit; 
	//	}
		$j=1;
		$arr=array();
		$a=0;
		while($j<=$i)  {
		$x= "category". "$j" ;
		  if($this->input->post("$x")==TRUE)  $arr[++$a]=$_POST["$x"];  else ; 
		  $j++; $n=$a;
			}
		for($a=1;$a<=$n;$a++)   $arr[$a];

		$this->load->model('insert_tag');
		$this->insert_tag->insert($arr,$n);
		$this->load->view('tag_forum_saved');
		
		
 	/*	$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		if( $this->form_validation->set_rules("<?php echo 'category'.  $i ?> ",'php','') ||
		$this->form_validation->set_rules('category2','android','required') ||
		$this->form_validation->set_rules('category3','ios','required')   ) {
		if($this->form_validation->run()==TRUE) {
				$j=1;
				while($j<=$parameter)
		  if($this->input->post("<?php echo 'category'.  $i ?> ")==TRUE) echo $x=1;  else echo  $x=0;
				$array = array(  
				  0 => $x,
				 1 => $y,
				  2 => $z
				);
			//	$this->load->model('insertcategory');
			//	$returnval = $this->insertcategory->insert($array);
				//if ($returnval == true)  
				//			$this->load->view('success');			
		}
		else {
				//$this->load->view('forumview');
				header('Location: http://localhost/Attendence/index.php/tagsettings/tagphp');	
		}
		}  */
		//if($_POST) {
		//	$this->load->model('insertcategory');
		//$this->insertcategory->insert($_POST['category']);
		//}
	//	else {
					
//		  }	
		
	}
	
}
?>