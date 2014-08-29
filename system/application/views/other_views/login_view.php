<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/CodeIgniter/css/mystyles.css"  type="text/css">
<script src="js/candidate.js" type="text/javascript"></script>
</head>
	<body>
	<?php include("include/header.php");?>	
		<div class="container">
			<div class="Innermain">
				
				<div class="design">
					<marquee behavior="alternate">********<span style="color:blue">welcome to login page</span>********</marquee>
				</div>
					<div class="leftblock"> 
						<p><i>save water save EARTH</i></p>
						
					</div>
					
							<div class="cont">

								<?php if(!empty($error_message)){ ?>
									<div class="error">
										<?php echo $error_message; ?>
									</div>
								<?php } ?>
								
								<form  method="POST" action="login/login_here" class="form_tab">
									<div class="input_box">
										<label>Email:</label>
										<input type="text" size="35"  id="email" name="email"/></br>
									</div>									
									<div class="input_box">
										<label>Password:</label>
										<input type="password" size="35"  id="password" name="password"/></br>
									</div>	
									<div class="abc">
										<input type="submit" name="login"  value="login"/>
									</div>
									<div class="newacnt">
							<p style="margin-left:10px;">login with your account or <a href="../index.php/new_account">create a new account</a></p>
									</div>
									
								</form>	
							    <div class="banners ">
									<img src="http://localhost/CodeIgniter/image/5.jpg" height="100px" width="150px">
									<img src="http://localhost/CodeIgniter/image/4.jpg" height="100px" width="150px">
									<img src="http://localhost/CodeIgniter/image/6.jpg" height="100px" width="150px">
									<img src="http://localhost/CodeIgniter/image/7.jpg" height="100px" width="150px">
									<img src="http://localhost/CodeIgniter/image/8.jpg" height="100px" width="150px">
									<img src="http://localhost/CodeIgniter/image/9.jpg" height="100px" width="150px">
								</div>	
							</div>							
				
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
</html>
<?php 
//session_destroy();
//mysql_close();
?>

