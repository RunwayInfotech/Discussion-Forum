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