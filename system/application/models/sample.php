<?php
 mysql_connect("localhost","root","");
 mysql_select_db("attendence");
 
 $term=$_GET["term"];
 
 $query=mysql_query("SELECT * FROM registrationdetails where email like '%".$term."%' order by email ");
 $json=array();
 
    while($student=mysql_fetch_array($query)){
         $json[]=array(
                    'value'=> $student["email"],
                    'label'=>$student["email"]
                        );
    }
 
 echo json_encode($json);
 
?>