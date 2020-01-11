<?php
   session_start();
?>
<html>
   <head>
      <meta charset="utf-8">
	  <title>Login System</title>
	  <link rel="stylesheet" type="text/css" href="stylee.css">
   </head>
   <body style="background-image:url('imB.jpg');width:70%;height:70%;">
	     
     <main>
			   <div>
				  <form action="includes/login.inc.php" method="post">
			      <br>
				  <center><input type="text" name="mailuid" placeholder="Username/E-mail--"></center>
				  <br>
				  <center><input type="password" name="pwd" placeholder="Password..."></center>
			       <br>
				  <center><button type="submit" name="login-submit">Login</button></center>
			   </form>
			   <br>
			     <ul>
               		   <li><a href="help.php">Help</a></li>
			            <li><a href="contact.php">Contact us</a></li>
			</ul>
	          </div>
			  
			  
   </main>
   </body>
</html>
   