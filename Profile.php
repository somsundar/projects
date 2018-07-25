<?php
    session_start();
	$user=$_REQUEST['user'];   
	$pass=$_REQUEST['pass'];   

       $host="localhost";
	   $user="root";
	   $admin_pass="";
       $db="MyDB";
      //connect to database
       
	   $connect = mysqli_connect($host,$user,$admin_pass,$db);
	   
	   $query="SELECT * FROM signup WHERE user='$user' and pass='$pass'";
	   
	   // To Execute the query in Mysql
	   
	   $sql=mysqli_query($connect,$query);
	   
	   $row=mysqli_fetch_row($sql); // fetch from database
	   // array
	   if($row)
	   {   
		    
			//echo $row[0]."<br>";
			//echo $row[1]."<br>";
			//echo $row[2]."<br>";
			//echo $row[3]."<br>";
			
	   }
?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>User</th> 
    <th>Pass</th>
    <th>Mobile</th>
  </tr>
  <tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
  </tr>
  
</table>



