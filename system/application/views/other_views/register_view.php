<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/CodeIgniter/css/mystyles.css"  type="text/css">
</head>
	<body>
		<?php include("include/header.php");?> 
	  <div class="container">
		<div class="Innermain">
		                  					
			<div class="middle">
				<?php //echo test_method('Register here with filling your details');?>
				<form  action="registers/insert_to_db" method="post"  enctype="multipart/form-data" class="register">
					<FIELDSET  style ="width:500px">
						<LEGEND><b>Information</b></LEGEND>
						Name:<input type="text" size="20" tabindex='1' id="name" name="name"><span style="color:red">*</span></br>
						Email: <input type="text" size="20" style="margin-top:5px;" name="email" tabindex='2' ><span style="color:red">*</span></br></br> 
						<label>Gender:</label>
							<input type="radio" name="gender" id="Male" value="Male"/>male
							<input type="radio" name="gender" id="Female" value="Female"/>female
						</br></br> 
						attach your files:<INPUT type="file" name="file" id="file" value="browse"></br> 			   
					</FIELDSET>
					
					<FIELDSET  style ="width:500px">
						<LEGEND><b>Education Information</b></LEGEND>
						<div style="width:478px;float:left; ">
							<div class="input_box">
								<label>Graduation:</label>
								<input  type="text" size="20" name="graduation"   tabindex='4'></br>
							</div>
							<div class="input_box">
								<label>PostGraduation:</label>
								<input type="text" size="20"   tabindex='5'/></br>
							</div>
							<div class="input_box">
								<label>Intermediate:</label>
								<input type="text" size="20" tabindex='6' name="intermediate"/></br>
							</div>
							<div class="input_box">
								<label>HighSchool:</label><input name="highschool" type="text" size="20" "tabindex='7'/></br>
                            </div>
							<div class="input_box">							  
								<label> Streams: </label>
								<select value="select stream"  name="stream"  tabindex='8'>
									 <optgroup label="post graduation">
										<OPTION>MSc</OPTION>
										<OPTION>MCA</OPTION>
										<OPTION>MBA</OPTION>
									 </optgroup>
									 <optgroup label="under graduation">
										<OPTION>BBA</OPTION>
										<OPTION>BSc</OPTION>
										<OPTION>BCA</OPTION>
									 </optgroup>						
								</select>
							</div>
						</div>						
					</FIELDSET>
					<FIELDSET  style="width:500px">
					   <LEGEND><b>Work Information</b></LEGEND>
					   <label>Work Experience</label>
						<input type="checkbox" name="workexperience"  tabindex='9'>Yes</input>		 
						<input type="checkbox" name="workexperience"  tabindex='10'>No</input><br><br>
					   <label>ADDRESS</label><br>
					   <TEXTAREA name="address" rows="4" cols="30" tabindex='11'></TEXTAREA>
					   <INPUT type="password" style="display:none" name="invisible-password" value="mypassword"/>
					   <INPUT type="password" style="display:none" name="invisible-password" value="mypassword"/>
					</FIELDSET> 
					<input type="submit" name="Submit" value="submit"  tabindex='12'/>	
					<input type="reset" name="reset" value="reset" type="reset" border='0' tabindex='13'/>
				</form>		
			</div>	
         
		</div>
	  </div>
 <?php include("include/footer.php"); ?>		  
	</body>
</html>