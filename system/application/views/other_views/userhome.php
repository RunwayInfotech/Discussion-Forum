<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/CodeIgniter/css/mystyles.css"  type="text/css">
</head>
	<body>
	
	<?php
	// echo   $_SESSION['user_id'];				
	// echo   $_SESSION['user_name'] ;
	 //echo test_method('Welcome to userhome')."<br>";
?>	
<?php include("include/header.php");?>
		<div class="container">
			<div class="Innermain">
		
			<div class="user">
				<h1 class="abc ab">Welcome </h1>
				 <div class="manage abc ab "> 
					  <?php  echo "hi this is"." " .$_SESSION['user_name']; ?>
						<?php echo  "id=".$_SESSION['user_id']."<br>"; ?><br>						
						</div>
				<div class="leftspace">
					<p>Inbox</p>
					<p>Sent Items</p>
					<p>Drafts</p>
				</div>
				   <div id="size">
				    <!--<img src="image/depositphotos_3195782-Under-construction.jpg" class="img3"/>-->	
				      
				    </div>
			</div>
			
		   </div>
		</div>
		<?php include("include/footer.php");?>
	</body>
</html> 