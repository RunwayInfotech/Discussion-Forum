<div class="inhead">
<style>
a:link {text-decoration:none;}
 .headcontent{color:#FAF605;height:auto;width:auto;margin-right: 110px;
   margin-top:15px;float: right;  }
.headcontent a
	{
		color: #FFFFFF;
		
		font-size: 18px;
		font-weight: bold;
	}
.headcontent li{display:inline;padding:0 7px 0 6px; background-color:transparent;}
.headcontent ul {
  text-align: left;
  display: inline;
  margin: 0;
  padding: 15px 4px 17px 0;
  list-style: none;
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
.headcontent ul li {
  font: bold 12px/18px sans-serif;
  display: inline-block;
  position: relative;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}
.container
</style>
<!--<script src="http://localhost/Attendence/js/jquery2.0.js"></script>-->
<?php if(isset($_SESSION['empid']))
	{?>
	 <div class="headcontent">
		<ul>
			<li><a href="http://localhost/Attendence/index.php/home">Home</a></li>
			<li>|</li>
			<li><a href="http://localhost/Attendence/index.php/signout">Sign out</a></li>			
		</ul>
	</div>	
	<?php
	}
	else{
	?>
	
	<div class="headcontent" style="margin-right:177px">
		<ul>
			<li><a href="http://localhost/Attendence/index.php">Log In</a></li>			
		</ul>
	</div>	
	<?php } ?>
</div>
