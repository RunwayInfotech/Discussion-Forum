<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="../css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
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
				<div style="width: 100%; height:140px;">
					<div style="float:right; width:146px; margin-top: 40px;">
						<canvas id="canvas">The canvas is not supported by your browser</canvas>
					</div>
				</div>
				<div class="innermain">
					<h2><span>HAPPY BIRTHDAY TO YOU</span></h2>
					<iframe width="660" height="430" src="//www.youtube.com/embed/EzxuRKe1CfU" frameborder="0" allowfullscreen></iframe>						
				</div>			
					 <p><a href="../index.php/home">view next </a></p>				
			</div>		
		<?php include("include/footer.php");?>	
	</div>				
</body>
</html>
