<html>
<head>
 <!-- <link rel="stylesheet" type="text/css" media="all" href="http://localhost/Attendence/css/jquery.fancybox.css"> 
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://localhost/Attendence/js/jquery.fancybox.js?v=2.0.6"></script>-->
</head>
<body>
<div id="footer">
		<p>Treewalker Technologies Private Limited</p>
<!--<div id="wrapper">
	<!--<p>Send us feedback from the modal window.</p>

	<div class="feed">
    <a class="modalbox" href="#inline"><img src="http://localhost/Attendence/image/feedback.jpg"/></a>
</div>
</div>-->

<!-- hidden inline form -->
<div id="inline">
	<h2>Send us a FeedBack</h2>

	<form id="contact" name="contact" action="#" method="post">
	    <ul><li><label for="name">Name</label>
		        <input type="name" id="name" name="name" class="txt"></li>
		    <li><label for="email">E-mail</label>
		        <input type="email" id="email" name="email" class="txt"></li>
		    <li><label for="msg">Message</label>
		        <textarea id="msg" name="msg" class="txtarea"></textarea></li></ul>		
		        <button id="send">Send</button>
	</form>
</div>
<script>
jQuery(document).ready(function() {
		function validateEmail(email) { 
		var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(email);
	}
		jQuery(".modalbox").fancybox();
		$("#contact").submit(function() { return false; });
		
			$("#send").on("click", function(){
			var emailval  = $("#email").val();
			var msgval    = $("#msg").val();
			var msglen    = msgval.length;
			var mailvalid = validateEmail(emailval);
			
			if(mailvalid == false) {
				$("#email").addClass("error");
			}
			else if(mailvalid == true){
				$("#email").removeClass("error");
			}
			
			if(msglen < 4) {
				$("#msg").addClass("error");
			}
			else if(msglen >= 4){
				$("#msg").removeClass("error");
			}
			
			if(mailvalid == true && msglen >= 4) {
				// if both validate we attempt to send the e-mail
				// first we hide the submit btn so the user doesnt click twice
				//$("#send").replaceWith("<em>sending...</em>");
				$.ajax({
					type: 'POST',
					url: 'http://localhost/Attendence/index.php/feedback',
					data: $("#contact").serialize(),
					success: function(response) 
					{						
						//alert($("#contact").serialize());
						//alert ("gggg"+response);
						if(response == "success") {
							$("#contact").fadeOut("fast", function(){
								$(this).before("<p><strong>Success!)</strong></p>");
								setTimeout("$.fancybox.close()", 1000);
								
							});
						}else{
						   $(this).before("<p><strong>Some error!</strong></p>");
						}
					}
				});
			}
		});
 });
</script>	
</div>
</body>
</html>	