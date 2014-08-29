<?php session_start();
ini_set("display_errors",1);
$con = mysql_connect("localhost","root","");
mysql_select_db("employeedetails", $con);
$query = "SELECT * FROM registrationdetails";
$rs = mysql_query($query);
$num_rows = mysql_num_rows($rs);
?>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/popup.css"  type="text/css" >
</head>
<div class="innermain" style="width:100%;">
	<div class="box">
		<div class="heading">
			<h1>
				<img alt="" src="http://localhost/Attendence/image/product.png">
				Users
			</h1>				
			<div class="content">
				<table class="list">
					<thead>
						<tr>
							<td class="right">Id</td>
							<td class="right">First name</td>
							<td class="right">Last name</td> 
							<td class="right">email</td>
							<td class="right">address</td>
							<td class="right">Mobile</td>
							<td class="right">B'day</td>
							<td class="right">Action</td>
						</tr>
					</thead>
					<tbody>
						<?php while($rec = mysql_fetch_array($rs))
						{ 
							$id = $rec['employee_id'];
							$fname = $rec['fname'];
							$lname = $rec['lname'];
							$email = $rec['email'];
							$add = 	$rec['address'];
							$ph = 	$rec['phone_no'];
							$bday = $rec['B_day'];
						?>
						<tr>			  
							<td class="comment more" ><?php echo $id;?></td>					  
							<td class="comment more" ><?php echo $fname;?></td>					  
							<td class="comment more" ><?php echo $lname;?></td>					  
							<td class="comment more" ><?php echo $email;?></td>					  
							<td class="comment more" ><?php echo $add;?></td>					  
							<td class="comment more" ><?php echo $ph;?></td>					  
							<td class="comment more" ><?php echo $bday;?></td>
							<td>
								<a href="<?php echo  "edit1?id=".$rec['employee_id']?>">Edit</a></br>
								<a href="edit1/delete?id=<?php echo $rec['employee_id'];?>">Delete</a>
							</td>
						</tr>					
						<?php } ?>									
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>					
		
