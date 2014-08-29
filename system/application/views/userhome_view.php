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
		<script>
var xmlhttp;
			  if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  }
			  else
			  {// code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
function password()
			{
			   var data_file = "http://localhost/Attendence/include/password.html";			   
			   xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function addevent()
			{ 
			 document.getElementById('password').style.display = 'none';
			   var data_file = "http://localhost/Attendence/include/event.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("password").innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function update()
			{    
			   document.getElementById('password').style.display = 'none';
			   var data_file = "http://localhost/Attendence/index.php/userupdate/edit";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}

function employeedetail()
			{     
			    
				document.getElementById('password').style.display = 'none';
				document.getElementById('present').style.display = 'none';
				var data_file = "http://localhost/Attendence/include/remove.php";
			   
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("password").innerHTML=xmlhttp.responseText;
						document.getElementById('password').style.display = 'block';
					}
				}
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function registration()
			{    
			   document.getElementById('password').style.display = 'none';
			   document.getElementById('present').style.display = 'none';
			  var data_file = "http://localhost/Attendence/include/new.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}					
</script>
</head>
	<body onload="init();">
		<div id="template">	
			<?php include("include/header.php");?>	
				<div class="container">
					<div class="img1" style="position:fixed;">
						<img src="../image/logo.png" class="img1"/>
					</div>
					<div class="next">								
							<!--<a href="../index.php/userhome"><img src = "../image/next1.jpg"/></a>-->				
							<a href="../index.php/home">Back</a>				
					</div>

					<!--<h1>Hello,</h1>
					<p><?php// echo "$name$nbsp"."$color";?></p>
					<font color="<?//=$color?>" size="<?//=$size?>"><?//=$name?></font>-->
					<div style="width: 100%; height:178px;">
						<div style="float:right; width:146px; margin-top: 40px;">
							<!--<canvas id="canvas">The canvas is not supported by your browser</canvas>-->
						</div>
					</div>
					<div class="innermain">					
						<?php 				
						if($_SESSION['empid'] == '111')
						{ 
						?>
							<input type="button"  value="Change Password" onclick="password()">
							<input type="button" value="Add an Event"  onclick="addevent()">
							<input type="button" value="View Monthly Report" onClick="window.location.href='report.php'">
							<input type="button" value="New Registration" onclick="registration()">
							<input type="button" value="Employee Details" onclick="employeedetail()">
						<?php 
						} else {
						?>
						 <input type="button"  value="Change Password" onclick="password()">
						<input type="button" value="Add an Event"  onclick="addevent()">
						<input type="button" value="Edit Personal Details"  onclick="update()">
						<input type="button" value="View Monthly Report" 
                        onClick="window.location.href='report.php'">
                        <input type="button" value="Forum" 
                        onClick="window.location.href='../index.php/toforumview'">	
						<?php } ?>
						<br/>						
						<div style="float:left;margin-left:49px" id="password"  class = "active">
							<form action="updatePassword.php" method="POST">
								<fieldset>
									<legend> Change Password</legend>
									<div class="input_box">
										<label>Password</label> 
										<input type="password"  size="45px" name="password"/>
									</div>
									<div class="input_box">
										<label>Confirm Password</label>
										<input type="password" size="45px" name="cpassword">
										<input type="hidden"  value = "<?php echo $_SESSION['empid']; ?>" name="empid" />
									</div>
									<input type="submit" value="Submit" />
								</fieldset>
							</form>		
						</div>		
					</div>
					<div id="present">
						<p>employee present today </p>
						<marquee bgcolor="#000080" scrollamount="2" direction="up" loop="true" width="113px" > 
							<center> 
								<font color="#ffffff">
								<strong>
									<?php
									$name = array();				
									foreach($query as $n)				
									{
										echo $name = $n->fname."<br>";					
									}?>
								</strong>
								</font>
							</center>
						</marquee>
					</div>
				</div>
			<?php include("include/footer.php");?>	
		</div>		
	</body>
</html>