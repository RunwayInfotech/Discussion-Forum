<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/Attendence/css/mystyles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/styles.css"  type="text/css" >
<link rel="stylesheet" href="http://localhost/Attendence/css/mycss.css"  type="text/css" >

<script type="text/javascript" src="js/analogCanvasClock.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
      	
<script>
function validate_form() {
 var x=document.forms["myform"]["textarea"].value;
 if(x==NULL || x=="") {
    alert("Answer cannot be blank");
	return false;
 }
}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://localhost/Attendence/js/Markdown.Converter.js" type="text/javascript"> // this 5 script  fxn and 1 css for text editor</script>
        <script src="http://localhost/Attendence/js/Markdown.Editor.js" type="text/javascript"></script>
        <script src="http://localhost/Attendence/js/Markdown.Sanitizer.js" type="text/javascript"></script>
        <script src="http://localhost/Attendence/js/Markdown.js" type="text/javascript"></script>
        <link href="http://localhost/Attendence/css/wmd.css" rel="stylesheet" />
<style>
.wmd-panel1 {
    margin-top: 20px;
}
#wmd-preview { 
    padding: 5px;
    margin-bottom: 20px;
    border: 2px dotted #ccc;
    width: 80%;
	margin-right:100px;
}
#likeit {
	background-color: <?php  echo "$color"; ?>;
	margin-top:7px;
	border-radius:3px;
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
</style>
<title>Forum</title>
</head>

<body onload="init();">		
			<?php  include("include/header.php");?>	
				<div class="container">
		    	    <div class="img1" style="position:fixed; float:left">
						<img src="http://localhost/Attendence/image/logo.png" class="img1"/>
					</div>
					<div style="width: 100%; height:140px;"> 
                      <a  href="../../index.php/tagsettings/tag" class="settings"> Settings</a>
                    <a  href="../../index.php/askquestion/askphp" class="askquestion"> Ask Question</a>
						<div style="float:right; width:146px; margin-top: 40px;">
							<!--<canvas id="canvas">The canvas is not supported by your browser</canvas>-->								   						</div>				
					</div>
            <div class="innermain" style="width:100%;">
                <div class="mainsection"> 
                <p class="discussheader">
                      <a  href="http://localhost/Attendence/index.php/toforumview"> 
                      Discussion Centre</a> </p>
                </div>
            <div class="topic">
             <?php   
                    if($_SESSION['php']==1){  ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectphp" class="forumcat1" > <?php	if($_SESSION['skill']=="php")   echo "<span style='text-shadow: 1px 1px 5px #F00;'>". "PHP"."</span>"; else echo "<span style=''>"."PHP"."</span>"; ?>  </a>	   <?php	 }   		
                    if($_SESSION['android']==1) { ?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectandroid" class="forumcat2" ><?php	if($_SESSION['skill']=="android")   echo "<span style='text-shadow: 1px 1px 5px #F00;'>". "Android"."</span>"; else echo "<span style=''>"."Android"."</span>"; ?>  </a>      <?php }					           
                    if($_SESSION['ios']==1)   {?>
             <a href="http://localhost/Attendence/index.php/selectskills/selectios"class=
 "forumcat3" ><?php	if($_SESSION['skill']=="ios")   echo "<span style='text-shadow: 1px 1px 5px #F00;'>". "iOS"."</span>"; else echo "<span style=''>"."iOS"."</span>"; ?>   </a>   <?php } ?>
      
            </div>
    <div class="ques_topic">
    <p class="topic_font"><?php $_SESSION['questionid']=$data1['q_id']; echo $data1['topic'];  ?></p>
    </div>
    <div class="ques_detail">
        <p class="detail_font"><pre width="30"><?php echo htmlspecialchars($data1['detail']); ?></pre></p>
           <div class="emp_detail">
                <p class="emp1">Posted By :
               	<b><?php echo $data1['fname'] ?></b>&nbsp;<b><?php echo $data1['lname']; ?></b></p>
                <p class="emp2">Date : 
   <b><?php	echo $data1['pdate']; ?></b>&nbsp;&nbsp;&nbsp;Time :<b><?php echo $data1['qtime']; ?>
   </b></p>
                <p class="emp13">Status : 
				      <b><?php	if($data1['status']==1)  
					   echo "<span style='color:green;'>". "Solved"."</span>";
                                else echo "<span style='color:red;'>"."Not Solved"."</span>"; ?> 	</b></p>
							<?php	if($data1['eq_id']==$_SESSION['empid'])  { ?>
				<?php	 $this->load->library('Form_validation');
 							echo validation_errors();
  							echo form_open('post_updated_answers/answersolved');  ?>
	   <p class="emp14"> <input type="submit" value="<?php	if($data1['status']==1)  echo "UnSolved";
                                else echo "Solved"; ?>" name="submitsolved" id="submitsolved" /></p>  
 <?php echo form_close();  }; ?>  
            </div>
    </div>
  
<div class="ans_each">
<p class="ans_head_font"> Your Answer </p> 
</div>
<?php    $this->load->library('Form_validation');
 				echo validation_errors();
				$attributes=array('name'=>"myform",'onsubmit'=>"return validate_form()");
				echo form_open('post_updated_answers/answer',$attributes);  ?>
  	 <div class="wmd-panel1">
            <div id="wmd-button-bar" style="width:80%;margin-left:100px;" ></div>
             <label for="answer_question_body" class="required"></label>
             <textarea  id="ask_question_body" placeholder="The Details of your answer."  cols="106" rows="10"  name="textarea" ></textarea>
            </div>

   	 <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
 <p>  <input type="submit" value="Post" name="submit"></p>
 <?php  echo form_close();  
 			if(!isset($data2))  {  echo "Be the first one to post it"; goto end;  } ?>
<div class="no_of_ans">
<?php $j=0; 
		foreach($data2 as $row) {
		$row['answer'];		
		$j++;  			
}  ?><p class="ans_font"><?php echo $j; ?>&nbsp;<?php if($j>1) { echo "Answers";   } else {  echo "Answer "; }?></p>
</div> 
<?php $i=1; 
foreach($data2 as $row) {    ?>
<div class="div_answer_main">
<p class="numbering"><?php  echo $i; ?></p>
  <!-- new wrapper div  -->
<div class="ans_detail">
<div class="content_wrapper">
        <p class="detail_font">
				<pre> <?php echo  htmlspecialchars($row['answer']); ?></pre><?php $i++; ?></p>
       <!-- <p class="detail_font"><span id="userName" class="editText">
										<?php // echo $row['answer'];  $i++; ?></p></span> -->
           <div class="emp_detail2">
                   <p class="emp3">
				<?php	 $this->load->library('Form_validation');
 							echo validation_errors();
							$attributes = array('id' => 'likeform');
  							echo form_open('post_updated_answers/like_answer',$attributes); 	 ?>
      <input type="hidden" value="<?php  echo $row['id'];  ?>" name="answer_id">
       <input type="hidden" value="<?php  echo $row['likes'];  ?>" name="like_count">
     <?php  if($row['like_status']==1)   $color="#990000";  else  $color="#555555"; ?>
                <input type="submit" value="<?php 	
		   if($row['like_status']==1) echo "Liked";
              else echo "Like"; ?>" name="likeit" id="likeit" /> 
 <?php    echo form_close();  ?> </p> 
   <p class="emp4"> <?php echo $row['likes'];  ?> People like this. </p>
                <?php  if($row['ea_id']==$_SESSION['empid'])  { ?>
                	<p class="emp122"><a href="../../index.php/delete/delete_post?var11=
				  <?php 
		 		 echo  $row['id'];?>"> &nbsp;<b><?php  echo"<span style='color:red;'>". "Delete"."</span>";   } ?></b></a> </p>  
                <p class="emp12">Date:
        <b><?php	echo $row['adate']; ?></b>&nbsp;&nbsp;&nbsp;Time: <b><?php echo $row['atime']; ?></b></p>
        <p class="emp22">Posted By:
     <b><?php echo $row['fname']; ?></b>&nbsp;<b><?php echo $row['lname'];  ?></b></p>
          </div>
    </div>   
</div>  <!-- new wrapper div  -->
    </div><?php    }  end: ?>

<div style="height:100px">
</div>
</div>
</div>

<?php  include("include/footer.php");?>

</body>
</html>