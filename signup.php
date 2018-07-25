<?php
    session_start();
	
	$name=$_REQUEST['name'];    
	$user=$_REQUEST['user'];   
	$pass=$_REQUEST['pass'];   
	$mobile=$_REQUEST['mobile']; 
     //echo $name, $user, $pass, $mobile;

       $host="localhost";
	   $user="root";
	   $admin_pass="";
       $db="MyDB";
      //connect to database
       
	   $connect = mysqli_connect($host,$user,$admin_pass,$db);
	   
	   $query="insert into signup values('$name','$user','$pass','$mobile')";
	   
	   // To Execute the query in Mysql
	   
	   $sql=mysqli_query($connect,$query);
	   
	   if($sql)
	   {   
		    
			$_SESSION['x']="Success";
			
			//echo $_SESSION['x'];
			//Page Redirection
			header("location:Register.php");
	   }
	   
	   
	   
	   
	  

?>


