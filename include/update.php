<div style="float:left; margin-left:35px;" id="update" >
			<form id="form" action="index.php/userUpdate/insert_to_db" method="post">			
			   <fieldset>
					<legend>Edit Personal details</legend>					
								<div class="input_box">
								<label>First Name</label> 
								<input id="fname" size="45px" type="text" name="fname" />
							  </div>
								<div class="input_box">
								<label>Last Name</label>
								<input id="lname" size="45px" type="text" name="lname" /> 
							</div>
							<div class="input_box">
								<label>E-Mail</label>
								<input id="email"  size="45px" type="text" name="email"/>
							</div>							
							<div class="input_box">
								<label>Address</label>
								<input id="address" size="45px" type="text" name="address"/>
							</div>
							<div class="input_box">
								<label>Phone NO.</label>
								<input id="phone" size="45px" type="text" name="phone"/>
							</div>
							<div class="input_box">		
								<input type="button" name="Update" value="Update" onclick="userupdate" />			
								<input type="reset" value="Reset" />
							</div>
					</fieldset>						
			</form>
		</div>