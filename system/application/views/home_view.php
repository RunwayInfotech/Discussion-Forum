<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="../css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<style>
label{width:100px;float:left; margin-top:4px;}
		.main{width:70%; height:auto; margin:auto;}
		.input_box{margin-bottom:10px; width:40%;}
		.form_tab{ border:1px solid #DFC0E2; box-shadow:5px 5px 5px 5px #888888; padding:35px;}
		.upload{width:30%;}
		</style>
</head>
	<body onload="init();">		
			<?php include("include/header.php");?>	
				<div class="container">
					<div class="img1" style="position:fixed; float:left">
						<img src="../image/logo.png" class="img1"/>
					</div>
					<div class="next" >								
							<!--<a href="../index.php/userhome"><img src = "../image/next1.jpg"/></a>-->				
							<a href="../index.php/userhome">Next</a>				
						</div>

					<div style="width: 100%; height:140px;">
						<div style="float:right; width:146px; margin-top: 40px;">
							<!--<canvas id="canvas">The canvas is not supported by your browser</canvas>-->
						</div>				
					</div>
					<div class="innermain">
						<div class="thought">
												
							<div class="quote">
								<p>"<?php foreach($query1 as $rs)
								{
									echo  $rs->admin_post; 
								}?>"</p>
							<!--<img src="../image/appreciation_quotes.jpg"/></img>-->
							</div>	
						</div>
						
						<div class="event">
					<marquee  scrollamount="2" direction="up" loop="true"  > 
							<center> 
								<font color="">
								<strong>
									<?php foreach($query as $row)
									{									
										echo  $row->event_details."<br>".$row->event_date. "<br>"."Post by ".$row->post_by;
										echo "<br>";								
										echo " **********************************************************************";
									} ?>
								</strong>
								</font>
							</center>
						</marquee>
						</div>
						<!--<div style="height:44px;width:610px;">
							<h3><span style="color:#C797ED;">BEST EMPLOYEE OF THE MONTH IS</span><b><?php //echo "&nbsp".$best; ?></b></h3>
						</div>-->
						<?php if($_SESSION['empid']=='111')
						{?>
							<div style="width:100%;min-height:161px;">
								<form action="../index.php/adminpost/edit_post" method="post">
									<div class="input_box_home">
										<label>Thought Of The Day</label> 
										<TEXTAREA name="thetext" value="thetext" rows="3" cols="38"></TEXTAREA>
									</div>
									<div class="input_box1">
										<input type="submit" value="Post" />
									</div>								
								</form>
							</div>
						<?php } ?>					
					</div>
					<div class="next_bottom" >								
							<!--<a href="../index.php/userhome"><img src = "../image/next1.jpg"/></a>-->				
							<a href="../index.php/userhome">Next</a>				
						</div>

				</div>				
			<?php include("include/footer.php");?>	
	</body>
</html>
