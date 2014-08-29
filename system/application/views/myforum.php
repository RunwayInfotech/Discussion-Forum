<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

<style>
.askquestion {
	font-size:24px;
	font-family:Tahoma, Geneva, sans-serif;
	background-color:#999;
	float:right;
	margin-top:80px;
	margin-right:55px;
	padding:10px;	
	color:#000;
}
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


ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  background:#999;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
ul li:hover {
  background: #555;
  color: #fff;
}
ul li ul {
  padding: 0;
  position: absolute;
  top: 48px;
  right: 3px;
  width: 170px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  display: none;
  opacity: 0;
  visibility: hidden;
  -webkit-transiton: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -ms-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  -transition: opacity 0.2s;
}
ul li ul li { 
  background: #555; 
  display: block; 
  color: #fff;
  text-shadow: 0 -1px 0 #000;
}
ul li ul li:hover { background: #6C9; color: #666; }
ul li:hover ul {
  display: block;
  opacity: 1;
  visibility: visible;
}

.x {
	font-size:18px;
	font-weight:300;
	font-family:Tahoma, Geneva, sans-serif;
	background-color:#999;
	float:right;
	margin-top:80px;
	margin-right:55px;
	color:#000;
}
.x1 {
	font-size:18px;
	font-weight:300;
	font-family:Tahoma, Geneva, sans-serif;
	background-color:#F00;
	float:right;
	margin-top:80px;
	margin-right:55px;
	color:#000;
}
.notify{
	float:right;
	margin-top:-10px;
	font-size:14px;
	margin-left:5px;
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
<style>ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  margin-right: -4px;
  position: relative;
  padding: 15px 20px;
  background:#999;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
</style>       
                  <ul> <?php if(!isset($data))  { ?>
                          <li class="x"> <?php  } 
                          else { ?>
						   <li class="x1">  <?php  } ?>
                           <span class="notify"> 
						   <?php  if(isset($data)) { $i=0;  foreach($data as $row)   {  $i++; } echo $i;}?>
                            </span>
                            Notifications  
                            <ul>  <?php     if(isset($data))   foreach($data as $row)   {    ?>
                                  <a href="../index.php/showanswer/answer?var1=<?php 
                                       $x=$row['q_id'];  echo $x;  ?> 
                                       &var2=<?php echo $seen=0;   ?>
                                       &var3=<?php echo  $row['employee_id'];   ?>" style="color:#000;">
                                  <li>
                                  <?php echo  $row['fname']. " ". $row['lname'];  ?>
                                    tagged you in <?php echo  $row['skill'];   ?> 
                                   </li>  </a>     <?php }
								   else { ?>
									<li>No Notification
                                   </li>   <?php } ?>
                            </ul>
                          
                          </li>
	   			</ul>
				</div>          
     
            <div class="innermain" style="width:880px;">
            <div class="mainsection"> 
          			<p class="discussheader"> 
                      Discussion Centre</p>
            </div>
            <div class="topic">
             <?php   
                    if($_SESSION['php']==1 ){  ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectphp" class="forumcat1" > PHP </a>	   <?php	 }   		
                    if($_SESSION['android']==1 ) { ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectandroid" class="forumcat2" > Android</a>      <?php }					           
                    if($_SESSION['ios']==1 )   {?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectios"class=
 "forumcat3" > iOS </a>   <?php } ?>
      
             </div>
          
             </div>
             </div>
      <?php include("include/footer.php");?>	       
</body>
</html>