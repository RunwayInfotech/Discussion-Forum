 $(document).ready(function(){   
    var jVal = {
        'fullName' : function() {
           $('body').append('<div id="nameInfo" class="info"></div>');
            var nameInfo = $('#nameInfo');
            var ele = $('#fullname');
            var pos = ele.offset();
		var name = $.trim($('#fullname').val());
            nameInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(name === '') {
                jVal.errors = true;
               // nameInfo.removeClass('correct').addClass('error');
             ele.removeClass('normal').addClass('inputbox');
            } 
			else 
			{
                //nameInfo.removeClass('error').addClass('normal');
                ele.removeClass('wrong').addClass('normal');
            }
        },
		
		  'Company' : function() {
           $('body').append('<div id="birthInfo" class="info"></div>');
            var birthInfo = $('#birthInfo');
            var ele = $('#company');
            var pos = ele.offset();
			var cname = $.trim($('#company').val());
            birthInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(cname === '')
			{
                jVal.errors = true;
                birthInfo.removeClass('correct').addClass('error').html('&larr; this is a required field').show();
                ele.removeClass('normal').addClass('wrong');
            } 
			else 
			{
                birthInfo.removeClass('error').addClass('correct').html('&radic;').show();
                ele.removeClass('wrong').addClass('normal');
            }
        },
		'address' : function() {
           $('body').append('<div id="genderInfo" class="info"></div>');
            var genderInfo = $('#genderInfo');
            var ele = $('#address');
            var pos = ele.offset();
			var address = $.trim($('#address').val());
            genderInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(address  === '') {   
                jVal.errors = true;
                genderInfo.removeClass('correct').addClass('error').html('&larr; please fill up the entry ').show();
                ele.removeClass('normal').addClass('wrong');
            }
			else 
			{
                genderInfo.removeClass('error').addClass('correct').html('&radic;').show();
                ele.removeClass('wrong').addClass('normal');
            }
        },
         'city' : function() {
           $('body').append('<div id="vehicleInfo" class="info"></div>');
            var vehicleInfo = $('#vehicleInfo');
            var ele = $('#city');
            var pos = ele.offset();
			var city = $.trim($('#city').val());
            vehicleInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(city==='') {   
                jVal.errors = true;
                vehicleInfo.removeClass('correct').addClass('error').html('&larr; please fill up the entry ').show();
                ele.removeClass('normal').addClass('wrong');
            }
			else 
			{
                vehicleInfo.removeClass('error').addClass('correct').html('&radic;').show();
                ele.removeClass('wrong').addClass('normal');
            }
        },
         
       'country' : function (){
            $('body').append('<div id="countryInfo" class="info"></div>');
            var countryInfo = $('#countryInfo');
            var ele = $('#country');
            var pos = ele.offset();
			var country = $.trim($('#country').val());
            countryInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(country==='') {
                jVal.errors = true;
                countryInfo.removeClass('correct').addClass('error').html('&larr; fill this entry!').show();
                ele.removeClass('normal').addClass('wrong');
            } 
			else 
			{
                countryInfo.removeClass('error').addClass('correct').html('&radic;').show();
                ele.removeClass('wrong').addClass('normal');
			}
        },
		'phone' : function (){
            $('body').append('<div id="aboutInfo" class="info"></div>');
            var aboutInfo = $('#aboutInfo');
            var ele = $('#phone');
            var pos = ele.offset();
			var phone = $.trim($('#phone').val());
            aboutInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
           if(phone === '') {
                jVal.errors = true;
                aboutInfo.removeClass('correct').addClass('error').html('&larr; this is a required field').show();
                ele.removeClass('normal').addClass('wrong');
            } 
			else
			{
                aboutInfo.removeClass('error').addClass('correct').html('&radic;').show();
                ele.removeClass('wrong').addClass('normal');
            }
		},
		 'mobile' : function() {
           $('body').append('<div id="mobileInfo" class="info"></div>');
            var mobileInfo = $('#mobileInfo');
            var ele = $('#mobile');
            var pos = ele.offset();
		var name = $.trim($('#mobile').val());
            mobileInfo.css({
                top: pos.top-3,
                left: pos.left+ele.width()+25
            });
            if(name === '') {
                jVal.errors = true;
                    mobileInfo.removeClass('correct').addClass('error').html('&larr; this is a required field ').show();
                    ele.removeClass('normal').addClass('wrong');
            } else 
			{
                    mobileInfo.removeClass('error').addClass('correct').html('&radic;').show();
                    ele.removeClass('wrong').addClass('normal');
            }
        },
		  'email' : function() {
            $('body').append('<div id="emailInfo" class="info"></div>');
	            var emailInfo = $('#emailInfo');
	            var ele = $('#email');
	            var pos = ele.offset();	 
	            emailInfo.css({
	                top: pos.top-3,
	                left: pos.left+ele.width()+15
	            });	 
	            var patt = /^.+@.+[.].{2,}$/i;
	            if(!patt.test(ele.val())) 
				{
                    jVal.errors = true;
	                emailInfo.removeClass('correct').addClass('error').html('&larr; give a valid email adress').show();
	                ele.removeClass('normal').addClass('wrong');
	            }
				else 
				{
                    emailInfo.removeClass('error').addClass('correct').html('&radic;').show();
	                ele.removeClass('wrong').addClass('normal');
	            }
	        },	
			'security_check' : function() {
            $('body').append('<div id="s_checkInfo" class="info"></div>');
	            var s_checkInfo = $('#s_checkInfo');
	            var ele = $('#email');
	            var pos = ele.offset();	 
	            s_checkInfo.css({
	                top: pos.top-3,
	                left: pos.left+ele.width()+15
	            });	 
	            var patt = /^.+@.+[.].{2,}$/i;
	            if(!patt.test(ele.val())) 
				{
                    jVal.errors = true;
	                s_checkInfo.removeClass('correct').addClass('error').html('&larr; give a valid email adress').show();
	                ele.removeClass('normal').addClass('wrong');
	            }
				else 
				{
                    s_checkInfo.removeClass('error').addClass('correct').html('&radic;').show();
	                ele.removeClass('wrong').addClass('normal');
	            }
	        },	
    };
 // ====================================================== //

   $('#submit').click(function (){
        var obj = $.browser.webkit ? $('body') : $('html');
        obj.animate({ scrollTop: $('#jform').offset().top }, 750, function (){
            jVal.errors = false;
			jVal.fullName();
			jVal.Company();
            jVal.address();
            jVal.city();
            jVal.country();
            jVal.phone();
            jVal.mobile();
            jVal.email();
            jVal.security_check();
            jVal.browse();
            jVal.message();
          
           jVal.submit();
        });
        return false;
    });
	$('#fullname').change(jVal.fullName);
	$('#company').change(jVal.Company);
	$('#address').change(jVal.address);
	$('#city').change(jVal.city);
	$('#country').change(jVal.country);
	$('#phone').change(jVal.phone);
	$('#mobile').change(jVal.mobile);
	$('#email').change(jVal.email);
	$('#security_check').change(jVal.email);
	$('#browse').change(jVal.browse);
	$('#message').change(jVal.message);
});
 function init(){  
      clock();  
      setInterval(clock,1000);  
    }  
    function clock(){  
      var now = new Date();  
      var ctx = document.getElementById('canvas').getContext('2d');  
      ctx.save();  
      ctx.clearRect(0,0,150,150);  
      ctx.translate(75,75);  
      ctx.scale(0.4,0.4);  
      ctx.rotate(-Math.PI/2);  
      ctx.strokeStyle = "black";  
      ctx.fillStyle = "white";  
      ctx.lineWidth = 8;  
      ctx.lineCap = "round";  
      
      // Hour marks  
      ctx.save();  
      for (var i=0;i<12;i++){  
        ctx.beginPath();  
        ctx.rotate(Math.PI/6);  
        ctx.moveTo(100,0);  
        ctx.lineTo(120,0);  
        ctx.stroke();  
      }  
      ctx.restore();  
      
      // Minute marks  
      ctx.save();  
      ctx.lineWidth = 5;  
      for (i=0;i<60;i++){  
        if (i%5!=0) {  
          ctx.beginPath();  
          ctx.moveTo(117,0);  
          ctx.lineTo(120,0);  
          ctx.stroke();  
        }  
        ctx.rotate(Math.PI/30);  
      }  
      ctx.restore();  
        
      var sec = now.getSeconds();  
      var min = now.getMinutes();  
      var hr  = now.getHours();  
      hr = hr>=12 ? hr-12 : hr;  
      
      ctx.fillStyle = "black";  
      
      // write Hours  
      ctx.save();  
      ctx.rotate( hr*(Math.PI/6) + (Math.PI/360)*min + (Math.PI/21600)*sec )  
      ctx.lineWidth = 14;  
      ctx.beginPath();  
      ctx.moveTo(-20,0);  
      ctx.lineTo(80,0);  
      ctx.stroke();  
      ctx.restore();  
      
      // write Minutes  
      ctx.save();  
      ctx.rotate( (Math.PI/30)*min + (Math.PI/1800)*sec )  
      ctx.lineWidth = 10;  
      ctx.beginPath();  
      ctx.moveTo(-28,0);  
      ctx.lineTo(112,0);  
      ctx.stroke();  
      ctx.restore();  
        
      // Write seconds  
      ctx.save();  
      ctx.rotate(sec * Math.PI/30);  
      ctx.strokeStyle = "#D40000";  
      ctx.fillStyle = "#D40000";  
      ctx.lineWidth = 6;  
      ctx.beginPath();  
      ctx.moveTo(-30,0);  
      ctx.lineTo(83,0);  
      ctx.stroke();  
      ctx.beginPath();  
      ctx.arc(0,0,10,0,Math.PI*2,true);  
      ctx.fill();  
      ctx.beginPath();  
      ctx.arc(95,0,10,0,Math.PI*2,true);  
      ctx.stroke();  
      ctx.fillStyle = "#555";  
      ctx.arc(0,0,3,0,Math.PI*2,true);  
      ctx.fill();  
      ctx.restore();  
      
      ctx.beginPath();  
      ctx.lineWidth = 14;  
      ctx.strokeStyle = '#325FA2';  
      ctx.arc(0,0,142,0,Math.PI*2,true);  
      ctx.stroke();  
      
      ctx.restore();  
    }  
	
	var xmlhttp;
			  if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			  }
			  else
			  {// code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
function password()
			{
			  
			  
			   var data_file = "http://localhost/Attendence/include/password.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function addevent()
			{ 
			 document.getElementById('password').style.display = 'none';
			   var data_file = "http://localhost/Attendence/include/event.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("password").innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function update()
			{    
			   document.getElementById('password').style.display = 'none';
			   var data_file = "http://localhost/Attendence/include/update.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function removedetail()
			{ 
				document.getElementById('password').style.display = 'none';
				document.getElementById('present').style.display = 'none';
				var data_file = "http://localhost/Attendence/include/remove.php";
			   
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
						document.getElementById("password").innerHTML=xmlhttp.responseText;
						document.getElementById('password').style.display = 'block';
					}
				}
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}
function registration()
			{    
			   document.getElementById('password').style.display = 'none';
			   document.getElementById('present').style.display = 'none';
			   var data_file = "http://localhost/Attendence/include/new.html";
			   
			  xmlhttp.onreadystatechange=function()
			  {
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById('password').innerHTML=xmlhttp.responseText;
					document.getElementById('password').style.display = 'block';
				}
			  }
				xmlhttp.open("GET",data_file,true);
				xmlhttp.send();
			}


