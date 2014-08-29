<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/validate.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Success</title>
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
					<div class="innermain">
<p style="font-size:24px;">Your Desired Skills  Are Successfully stored in the database  </p>	
<?php   
				if($this->input->post('category1')==TRUE)   echo "PHP it is." ; else ; ?><br/> 
<?php  	  if($this->input->post('category2')==TRUE)  echo "ANDROID it is.";  else ;  ?><br/> 
<?php  	  if($this->input->post('category3')==TRUE)  echo "iOS it is.";  else ; 
?>		
 <div style="margin-top:30px;;">
 <a href="http://localhost/Attendence/index.php/seepost/post" style="font-size:24px ;font-weight:700;" > CLICK HERE </a>
 </div>
  <?php 
   // header('location:http://localhost/codeigniter/index.php/seepost/post');

 ?>
  </div>
  </div>
	<?php include("include/footer.php");?>	

	</body>
</html>
