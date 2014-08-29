<?php foreach($query as $row)
{?>
<div style="float:left; margin-left:35px;" id="update" >
			<form id="form" action="index.php/userUpdate/insert_to_db" method="post">			
			   <fieldset>
					<legend>Edit Personal details</legend>	
							<div class="input_box">
								<label>Date Of Joining:</label> 
								<input id="doj" size="45px" type="text" class="static" name="doj" value="<?php echo $row->joining_date;?>" readonly />
							</div>					
							<div class="input_box">
								<label>First Name:</label> 
								<input id="fname" size="45px" type="text" class="static" name="fname" value="<?php echo $row->fname;?>" readonly />
							</div>
							<div class="input_box">
								<label>Last Name:</label>
								<input id="lname" size="45px" type="text" name="lname" value="<?php echo $row->lname;?>" /> 
							</div>
							<div class="input_box">
								<label>E-Mail:</label>
								<input id="email"  size="45px" type="text" class="static" name="email" value="<?php echo $row->email;?>" readonly />
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
								<input id="phone" size="45px" type="text" class="static" name="phone" value="<?php echo $row->phone_no;?>" readonly />
							</div>
							<div class="input_box">
								<label>Reference No:</label>
								<input id="ref"  size="45px" type="text" name="ref" value="<?php echo $row->sec_phone_no;?>" />
							</div>	
							<div class="input_box">
								<label>Date Of Birth:</label>
								<input id="dob"  size="45px" type="text" class="static" name="dob" value="<?php echo $row->B_day;?>" readonly />
							</div>	
							<div class="input_box">
								<label>PAN Card No:</label>
								<input id="pan"  size="45px" type="text" class="static" name="pan" value="<?php echo $row->PAN;?>" readonly />
							</div>
							<div class="input_box">
								<label>Device Issued</label>
								<input id="device"  size="45px" type="text" class="static" name="device" value="<?php echo $row->device_issued;?>" readonly /> 
							</div>	
							<div class="input_box1">		
								<input type="button" name="Update" value="Update" onclick="userupdate" />			
								<input type="reset" value="Reset" />
							</div>
					</fieldset>						
			</form>
		</div>
<?php }
?>