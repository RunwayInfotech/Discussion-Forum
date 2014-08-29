<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<style>
.forumcat1,.forumcat2 ,.forumcat3 {
	font-size:26px;
	font-family:Tahoma, Geneva, sans-serif;
	float:left;
	width:260px;
	-webkit-box-shadow: 0px 1px 43px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 43px -4px rgba(0,0,0,0.75);
box-shadow: 0px 1px 43px -4px rgba(0,0,0,0.75);
height:100px;
margin-left:20px;
padding-top:50px;
}
.forumcat1{
	/*background-color:#00C;*/
}
.forumcat2 {
	/*background-color:#0F3;*/
}
.forumcat3 {
	/*background-color:#96F; */	
}
.discussheader {
	font-family:Tahoma, Geneva, sans-serif;
	font-size:32px;
	margin-bottom:40px;
	padding-bottom:10px;
	border-bottom-width:2px;
	border-bottom-color:#000;
	border-bottom-style:ridge;
}
.mainsection {
	margin-top:30px;	
	/*background-color:#06C; */
}
.topic {
	/* background-color:#3F9; */
	height:40px;
}
</style>
<title>MyForum</title>
</head>
	<body onload="init();">		
			<?php include("include/header.php");?>	
				<div class="container">
					<div class="img1" style="position:fixed; float:left">
						<img src="http://localhost/Attendence/image/logo.png" class="img1"/>
					</div>
				<div style="width: 100%; height:140px;">
						<div style="float:right; width:146px; margin-top: 40px;">
							<!--<canvas id="canvas">The canvas is not supported by your browser</canvas>-->					</div>				
				</div>
            <div class="innermain" style="width:880px;">
            <div class="mainsection"> 
          			  <p class="discussheader">Discussion Centre </p>
            </div>
            <div class="topic">
             <?php   
                    if($php==1 ){  ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectphp" class="forumcat1" > PHP </a>	   <?php	 }   		
                    if($android==1 ) { ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectandroid" class="forumcat2" > Android</a>      <?php }					           
                    if($ios==1 )   {?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectios"class=
 "forumcat3" > iOS </a>   <?php } ?>
      
             </div>
          
             </div>
             </div>
      <?php include("include/footer.php");?>	       
</body>
</html>