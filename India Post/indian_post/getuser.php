<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

 table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
 <body>

<?php
$q = intval($_GET['q']);

 $con = mysqli_connect('localhost', 'root', '', 'indian_post_db');
 if (!$con) {
     die('Could Not Connect: ' . mysqli_error($con));
 }

 //mysqli_select_db($con,"currier_info_db");
 $sql="SELECT Sender_Register_Date FROM currier_info_db WHERE Registration_ID = '$q'";
 
 $result = $conn->query($sql);
//$result = mysqli_query($con,$sql);

// if the $result contains at least one row
						if ($result->num_rows > 0) {
						  // output data of each row from $result
						  
						  

 //while($row = mysqli_fetch_array($result)) {
 while($row = $result->fetch_assoc()) {
 	 echo '<table>';
 echo '<tr>';
 echo '<td>';
 echo 'Sender_Register_Date';
 echo '</td>';
 echo '</tr>';
     echo '<tr>';
     echo '<td>' .$row['Sender_Register_Date'];
	 echo '</td>';
     echo '</tr>';
	 echo '</table>';
 }
 
 }
 mysqli_close($con);
 ?>
</body>
</html>