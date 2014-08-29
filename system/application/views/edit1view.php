<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="../css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/validate.js"></script>
<style>
label{width:100px;float:left; margin-top:4px;}
		.main{width:658px; height:auto; margin:auto;}
		.input_box{margin-bottom:10px; width:434px;}
		.form_tab{ border:1px solid #DFC0E2; box-shadow:5px 5px 5px 5px #888888; padding:35px;}
		.upload{width:264px;}
		</style>
</head>
	<body onload="init();">
		<div id="template">	
			<?php include("include/header.php");?>	
				<div class="container">
					<div class="img1" style="position:fixed;">
						<img src="http://localhost/Attendence/image/logo.png" class="img1"/>
					</div>
					<!--<h1>Hello,</h1>
					<p><?php// echo "$name$nbsp"."$color";?></p>
					<font color="<?//=$color?>" size="<?//=$size?>"><?//=$name?></font>-->
					<div style="width: 100%; height:178px;">
						<div style="float:right; width:146px; margin-top: 40px;">
							<canvas id="canvas">The canvas is not supported by your browser</canvas>
						</div>
					</div>
					<div class="innermain">					
					<?php foreach($query as $row)
							{
								  $id = $row->employee_id;
								  $fname =  $row->fname;
								  $lname =  $row->lname;
								  $email =  $row->email;
								  $address =  $row->address;
								  $phone_no =  $row->phone_no;
								  $B_day =  $row->B_day;
							}?>
							
					</div>
					<form id="jform" action="edit1/update" method="post" >
							<h1> <?php echo $fname; ?>Details:</h1>				
							<fieldset>
								<legend>Personal Details</legend>
								<div class="input_box" style="">
									<label>EMP id:</label>
									<input type="int" name="employee_id" size="45" id="id"  value="<?php echo $row->employee_id; ?>"/>
								</div>
								<div class="input_box">
								<label>Date Of Joining:</label> 
								<input id="doj" size="45px" type="text" name="doj" value="<?php echo $row->joining_date;?>"  />
							</div>					
							<div class="input_box">
								<label>First Name:</label> 
								<input id="fname" size="45px" type="text"  name="fname" value="<?php echo $row->fname;?>" />
							</div>
							<div class="input_box">
								<label>Last Name:</label>
								<input id="lname" size="45px" type="text" name="lname" value="<?php echo $row->lname;?>" /> 
							</div>
							<div class="input_box">
								<label>E-Mail:</label>
								<input id="email"  size="45px" type="text"  name="email" value="<?php echo $row->email;?>" />
							</div>	
							<div class="input_box">
								<label>Other E-Mail:</label>
								<input id="other_mail"  size="45px" type="text" name="other_mail" value="<?php echo $row->sec_email ;?>" />
							</div>	
							<div class="input_box">
								<label>Address:</label>
								<input id="address" size="45px" type="text" name="address" value="<?php echo $row->address;?>"/>
							</div>
							<div class="input_box">
								<label>Phone NO:</label>
								<input id="phone" size="45px" type="text"  name="phone" value="<?php echo $row->phone_no;?>" />
							</div>
							<div class="input_box">
								<label>Reference No:</label>
								<input id="ref"  size="45px" type="text" name="ref" value="<?php echo $row->sec_phone_no;?>" />
							</div>	
							<div class="input_box">
								<label>Date Of Birth:</label>
								<input id="dob"  size="45px" type="text" name="dob" value="<?php echo $row->B_day;?>"  />
							</div>	
							<div class="input_box">
								<label>PAN Card No:</label>
								<input id="pan"  size="45px" type="text"  name="pan" value="<?php echo $row->PAN;?>"  />
							</div>
							<div class="input_box">
								<label>Device Issued</label>
								<input id="device"  size="45px" type="text" name="device" value="<?php echo $row->device_issued;?>"  /> 
							</div>	
							<div class="input_box">		
								<input type="button" name="Update" value="Update" onclick="userupdate" />			
								<input type="reset" value="Reset" />
							</div>				
							</fieldset>		
							<input type="submit" name="Submit" value="Submit" id="submit" tabindex='12'/>
							<!--<p>forgot password <a href="" >click here</a>-->
						</form>
			<?php include("include/footer.php");?>	
		</div>		
	</body>
</html>