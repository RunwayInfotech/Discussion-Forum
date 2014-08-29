<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<style>
label{width:60px;float:left; margin-top:4px;}
		.main{width:658px; height:auto; margin:auto;}
		.input_box{margin-bottom:10px; width:434px;}
		.form_tab{ border:1px solid #DFC0E2; box-shadow:5px 5px 5px 5px #888888; padding:35px;}
		.upload{width:264px;}
		
				.skills {
			font-family:"Comic Sans MS", cursive;
			font-size:30px;	
		}
		.choice {
			height:40px; margin-left:40%;
		}
		#x {
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;
			float:left;
			margin-left:255px;	
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
	margin-top:4px; 
}  
.checkbox label:before {  
    border-radius: 8px;  
} 
input[type=checkbox]:checked + label:before {  
    content: "\2022";  
    color: #f3f3f3;  
    font-size:30px;  
    line-height: 14.5px;  
}  	
	
</style>
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
					   <p class="skills"> Choose Your Desired Skills  </p>

<?php 
				$this->load->library('Form_validation');
				echo validation_errors();
				echo form_open('/fetchcategory/fetch');  ?>       
                <div class="checkbox">
                       <div class="choice">         
                        <input type="checkbox" value="1"  id="1" name="category1" />
                         <label for="1">PHP</label>
                        </div>
                        <div class="choice">          
                        <input type="checkbox" value="2" id="2" name="category2" />
                         <label for="2">Android</label>
                        </div>
                        <div class="choice">
                        <input type="checkbox" value="3" id="3" name="category3" />
                        <label for="3">iOS</label>
                        </div>
                        <input type="submit" value="Submit" id="x"/> 
				</div>
             </div>
			</div>	
             <?php    echo form_close();  ?>			
			<?php include("include/footer.php");?>	

	</body>
</html>



