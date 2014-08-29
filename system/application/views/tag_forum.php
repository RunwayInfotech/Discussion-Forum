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
	background-color:#6C9;
}
.mainsection {
	margin-top:30px;	
	/*background-color:#06C; */
}
.topic {
	/* background-color:#3F9; */
	height:40px;
}
.skills 
{
	font-family:"Comic Sans MS", cursive;
	font-size:25px;
	text-align:center;
}
label{width:360px;float:left; margin-top:4px; text-align:left; }
		.main{width:658px; height:auto; margin:auto;}
		.input_box{margin-bottom:10px; width:434px;}
		.form_tab{ border:1px solid #DFC0E2; box-shadow:5px 5px 5px 5px #888888; padding:35px;}
		.upload{width:264px;}
		
		.choice {
			height:40px; margin-left:40%;
		}
		#x {
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;
			margin-left:-40px;
			font-size:22px;
			color:#000;
		}
label {  
    display: inline-block;  
    cursor: pointer;  
    position: relative;  
    padding-left: 25px;  
    margin-right: 15px;  
    font-size: 23px;  
}  
input[type=checkbox] {  
    display: none;  
}  
label:before {  
    content: "";  
    display: inline-block;  
  
    width: 16px;  
    height: 16px;  
    margin-right: 10px;  
    position: absolute;  
    left: 0;  
    bottombottom: 1px;  
    background-color: #aaa;  
    box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8); 
	margin-top:6px; 
}  
.checkbox label:before {  
    border-radius: 7px;  
} 
input[type=checkbox]:checked + label:before {  
    content: "\2022";  
    color: #060;  
    font-size:40px;  
    line-height: 13.5px;  
}  	
	
</style>
<title>Tag Settings</title>
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
          			 <p class="discussheader">
                      <a  href="http://localhost/Attendence/index.php/toforumview"> 
                      Discussion Centre</a> </p>
            </div>
            <div class="topic">
             <p class="skills"> People That Can't Tag You </p>
      <?php 
				$this->load->library('Form_validation');
				echo validation_errors();
				echo form_open('/fetchtag/fetch');  ?>       
                <div class="checkbox">
                <?php 
				$i=1;
				foreach($tag_name as $row) { ?>
                <div class="choice">         
                        <input type="checkbox" value="<?php echo $row['employee_id'] ; ?>"  
                        id="<?php echo $i ?>" 
                       name="<?php echo 'category'.  $i ?>"  
					   <?php if( $row['dont_tag_status']==1 ) echo "checked";?> />
                         <label for="<?php echo $i ?>">
						 <?php echo $row['fname']. " ".$row['lname'] ;  $i++;?></label>
                        </div>
                        <?php } ?>
                        <input type="hidden" name="username" value="<?php echo $i ?>" />
                        <input type="submit" value="Submit" id="x"/>  
				</div>
             </div>
			</div>	
             <?php    echo form_close();  ?>	
             </div>
          
             </div>
             </div>
      <?php include("include/footer.php");?>	       
</body>
</html>