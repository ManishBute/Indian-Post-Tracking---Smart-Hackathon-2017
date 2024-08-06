<!DOCTYPE html>
<html>
<body>

<?php
 echo "Hello World!";
?>

<p>
</p>

<?php

							$mysqli=mysqli_connect("localhost", "root", "");
						   	mysqli_select_db($mysqli,"indian_post_db");
							
							// Check connection
							 if (mysqli_connect_errno())
							   {
							   echo "Failed To Connect To DB: " . mysqli_connect_error();
							   } 
							echo "Connected successfully";
							
//$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

								/* check connection */
								if (mysqli_connect_errno()) {
									printf("Connect failed: %s\n", mysqli_connect_error());
									exit();
								}

								if ($result = $mysqli->query("select * from currier_info_db")) {
								
									/* determine number of rows result set */
									$row_cnt = $result->num_rows;
								
									printf("Result set has %d rows.\n", $row_cnt);
								
									/* close result set */
									$result->close();
								}
								
								/* close connection */
								$mysqli->close();
?> 

<p>
</p>

<?php
		 $con=mysqli_connect("localhost", "root", "");
						   	mysqli_select_db($con,"indian_post_db");
		 // Check connection
		 if (mysqli_connect_errno())
		   {
		   echo "Failed to connect to MySQL: " . mysqli_connect_error();
		   }
		
		$sql="select * from currier_info_db";
		
		if ($result=mysqli_query($con,$sql))
		  {
		  // Fetch one and one row
		  while ($row=mysqli_fetch_row($result))
			{
			printf ("%s (%s)\n",$row[0],$row[1]);
			}
		  // Free result set
		  mysqli_free_result($result);
		}
		
		mysqli_close($con);
 ?> 

<p>
</p>

 <?php

	   $con=mysqli_connect("localhost", "root", "");
		mysqli_select_db($con,"indian_post_db");
		$qry="select * from currier_info_db";
        $result=mysqli_query($qry);
	    $num=mysqli_num_rows($result);
		
	  if ($num>=1)
	  {
	  
		  while($row=mysqli_fetch_array($result))
		  {
	
		  }
	  		mysqli_close($con);
		}	
	  ?>
	  
	  <p>
	  </p>
	  
	  <?php
// connect to the "tests" database
$conn = new mysqli('localhost', 'root', '', 'indian_post_db');

// check connection
if (mysqli_connect_errno()) {
  exit('Connect Failed: '. mysqli_connect_error());
}

// SELECT sql query
//$sql = "SELECT `id`, `name`, `pass` FROM `users`"; 
$sql ="select LPO1_Name from currier_info_db where Registration_ID = 'SCPS10370001IN'";

// perform the query and store the result
$result = $conn->query($sql);

// if the $result contains at least one row
if ($result->num_rows > 0) {
  // output data of each row from $result
  while($row = $result->fetch_assoc()) {
    echo $row['LPO1_Name'];
	$row_data = $row['LPO1_Name'];
	
	if($row_data == '')
	{
	echo "Ready";
	echo $row_data;
	}
	else
	{
	echo "Not Ready";
	}
  }
}
else {
  echo '0 results';
}

$conn->close();
?>
	  
</body>
</html> 