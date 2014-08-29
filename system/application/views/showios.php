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
	margin-right:20px;
	padding:10px;	
	color:#000;
}
.settings {
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
	width:33%;
}
.forumcat1{
	
}
.forumcat2 {
		
}
.forumcat3 {
	text-shadow: 1px 1px 5px #F00;
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
}
.topic {
	/* background-color:#3F9; */
	height:40px;
}
.questions {
	margin-top:50px;
	 	background: #C36;
    margin: auto;
	 height:auto;
    width: 85%;
	/*margin-bottom:50px; */
	background: #ffffff; 

}
.block {
	width:882px;
	height:70px;
	margin: auto;
	padding-left:95px;
	padding-right:95px;
	background: #ffffff; 

}
.query {
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;	
	/*float:left;*/
}
a.query {
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;	
	display: block;
	/*float:left;*/
}
.t0 {
	width:40px;
	float:left;
background: #ffffff; 
}
.t1 {
	width:660px;
	float:left;
	background: #ffffff;
}
.t2 {
	width:120px;
	float:left;
	background: #ffffff;
}
.t3 {
	width:50px;
	float:left;
	background: #ffffff; 
}
</style>
<title>MyForum: iOS</title>
</head>
	<body onload="init();">		
			<?php include("include/header.php");?>	
	<div class="container" style="max-height:200px;min-height:300px;">
		    	    <div class="img1" style="position:fixed; float:left">
						<img src="http://localhost/Attendence/image/logo.png" class="img1"/>
					</div>
					<div style="width: 100%; height:140px;"> 
                      <a  href="../../index.php/tagsettings/tag" class="settings"> Settings</a>add
                    <a  href="../../index.php/askquestion/askios" class="askquestion"> Ask Question</a>
						<div style="float:right; width:146px; margin-top: 40px;">
						</div>				
					</div>
        <div class="innermain" style="width:880px;">
           			 <div class="mainsection"> 
          			  <p class="discussheader">
                      <a  href="http://localhost/Attendence/index.php/toforumview"> 
                      Discussion Centre</a></p>
            		</div>
                    <div class="topic">
			 <?php   
                    if($_SESSION['php']==1){  ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectphp" class="forumcat1" > PHP </a>	   <?php	 }   		
                    if($_SESSION['android']==1) { ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectandroid" class="forumcat2" > Android</a>      <?php }					           
                    if($_SESSION['ios']==1)   {?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectios"class=
 "forumcat3" > iOS </a>   <?php } ?>
      
          	   </div>
               
                  </div>
           </div>  
           <div style="min-height:375px">
        <div class="questions">     
        <div class="block">
         <div class="t0"><p class="query">No.</p></div>
        <div class="t1"><p class="query">Topic </p></div>
        <div class="t2"><p class="query">Date </p></div>
  	      <div class="t3"><p class="query">Reply</p></div>
          </div>
          </div>
              
        <?php $i=1; 
		if($data==NULL) exit; foreach($data as $var) {  ?>
		<div class="block">
        <div class="t0"><p class="query"><?php  echo $i?></p>
        </div> 
        <div class="t1">
		<?php if(isset($var['topic']))  ?>
      			  <p class="query"><a href="../../index.php/showanswer/answer?var1=
				  <?php 
				   $x=$var['q_id'];
 		    	  $_SESSION['questionid']=$x; 
		 		 echo $_SESSION['questionid'];  ?>"
				  class="query"><?php echo $var['topic']; ?></a></p>
        </div>
        <div class="t2"><?php if(isset($var['pdate'])) ?><p class="query"><?php  echo $var['pdate']; ?>        </p></div>
  	      <div class="t3"><?php if(isset($var['reply'])) ?> <p class="query"><?php echo $var['reply']; ?>         </p></div>
       </div>  <?php   $i++;    }  ?> </div>	
       	
<div style="height:40px;background: #ffffff;width:85%;margin:auto;">
</div>        

<?php include("include/footer.php");?>	       
</body>
</html>