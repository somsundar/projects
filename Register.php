<a href="Login.php">Login</a>
<br>
<form action="signup.php" method="get">
 <p>  Name:<input  name="name"> </p>
  
  <p> User:<input  name="user">  </p>
  
  <p>   Pass:<input  name="pass">    </p>
   
  <p>  Mobile:<input  name="mobile">   </p>
  
  <input type="submit" value="submit">
</form>


<?php
	   session_start();
	   
	   if(empty($_SESSION['x']))
	   {
		   $_SESSION['x']="";
	   }
	   
	   if($_SESSION['x'])
	   {
	      echo $_SESSION['x'];
		  session_destroy();
	   }
	   
	   
?>

