<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
 <link rel="stylesheet" href="http://localhost/Attendence/css/jquery-ui.css" type="text/css" />
 <link rel="stylesheet" href="http://localhost/Attendence/css/main.css">
<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script src="http://localhost/Attendence/js/jquery.min.js"></script> 
<script src="http://localhost/Attendence/js/jquery-ui.min.js"></script>
<script src="http://localhost/Attendence/js/jquery.autocomplete.multiselect.js"></script>
<script src="gen_validatorv4.js" type="text/javascript"></script>
<script>

 
var name1;
  $(function() {
	  name1 = [
	<?php  $i=0;  
						 foreach($name as $row) {
							 if($row->fname==NULL) {
								 continue;
							 }
							 echo $var[$i]= '"'. $row->fname . ' '. $row->lname . '"'. ","  ; 
							 $i++;
						 }
	?>
	]; 
    $( "#questag" ).autocomplete({   source: name1});
  });
  
   var frmvalidator  = new Validator("myForm");
 frmvalidator.addValidation("title","req","Please enter your First Name");
    
</script>
        <script src="http://localhost/Attendence/js/Markdown.Converter.js" type="text/javascript"> // this below 4 fxn and 1 css for text editor</script>
        <script src="http://localhost/Attendence/js/Markdown.Editor.js" type="text/javascript"></script>
        <script src="http://localhost/Attendence/js/Markdown.Sanitizer.js" type="text/javascript"></script>
        <script src="http://localhost/Attendence/js/Markdown.js" type="text/javascript"></script>
        <link href="http://localhost/Attendence/css/wmd.css" rel="stylesheet" />
<style>
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
}
.questions {
	margin-top:50px;
	height:700px;
	/*margin-bottom:50px; */
}
#questitle {
	width:600px;
	float:left;
	margin-top:20px;
	border: 1px thick #F00;
}
.questitle {
	height:60px;
}
.headtitle {
	float:left;
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;
	padding-left:50px;
	margin-top:15px;
	width:14%;
}

#quesdetail {
	width:600px;
	float:left;
	height:250px;	
	margin-top:50px;
	border: 1px thick #F00;
	margin-top:20px;
}
.quesdetail {
	min-height:400px;
	height:auto;
}

#ask_question_body {
	width:600px;
	float:left;
	height:250px;	
	margin-top:50px;
	border: 1px thick #F00;
	margin-top:20px;
}

.questag {
	height:50px;
	margin-top:10px;
}
#questag {
	max-width:250px;
	margin-top:5px;
}
.headtag {
	float:left;
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;
	margin-top:0px;
	margin-left:-80px;
}
.sendmail {
	float:left;
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;
	margin-top:0px;
}
#check {
	float:left;
	margin-left:0px;
	margin-top:13px;
	margin-right:22px;
}	
.checkdiv {
	height:50px;
}
.headdetail {
	float:left;
	font-size:20px;
	font-family:Tahoma, Geneva, sans-serif;
	margin-left:-450px;
	margin-top:38px;
}  
#postsubmit {
	font-size:24px;
	float:left;
	margin-left:170px;
	margin-top:20px;
	margin-bottom:50px;
}
.postdiv {
	height:180px;
}
</style>
<title>MyForum: iOS</title>
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
                                  <p class="discussheader">Post Your Question</p>
                        </div>
                        <div class="topic">
                        <?php  
						$this->load->library('Form_validation');
						echo validation_errors();
						echo form_open('http://localhost/Attendence/index.php/postquestion/postios');
						?>
                        <form name="myForm"  id="myForm" method="post">
                        <div class="questitle">
                        <p class="headtitle"> Title </p> 
                        <input type="text"  autofocus placeholder="Be Specific. Question Title not more than 74 characters long." id="questitle" name="title" >
                        </div>
                        <div class="questag">
                        <p class="headtag" > Tags </p>
                      <input type="text" id="questag" name="tag"  placeholder="Type in a name of an employee"/>
                       </div>
				<div class="checkdiv">
                        <input type="checkbox"  id="check" name="check">
                        <p class="sendmail">Send me mail while someone post in it. </p>
               </div>
                        <div class="quesdetail">
                       			 <p class="headdetail"> Details </p>
                     			   <div class="wmd-panel">
                      		      <div id="wmd-button-bar" ></div>
                                    <label for="answer_question_body" class="required"></label>
                                    <textarea  id="ask_question_body" placeholder="The Details of your programming query."  cols="20" rows="8"  name="detail" ></textarea>
                                   </div>
   							 <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
                        </div>
     			
               <div class="postdiv">
                        <input type="submit" value="Post It " id="postsubmit">
               </div> 
                        </form>
                     
                        </div>
              		<?php  echo form_close(); ?>
                 </div>
             </div>
      <?php include("include/footer.php");?>	       
</body>
</html>	