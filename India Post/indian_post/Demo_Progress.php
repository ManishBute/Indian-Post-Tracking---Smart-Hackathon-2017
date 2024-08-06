<?php
 if (isset($_POST["Track"]))
 {
  //$Registration_ID=$_POST["Consignment_Number"];
  //$User_Name=$_POST["User_Name"];
 // $User_Zip_Code=$_POST["User_Zip_Code"];
  //$data = "suraj raju chidam";
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Government of India, Department of Post
</title>


    <style type="text/css">
<!--
.style1 {font-size: 12px; color: #FFFFFF; }
-->

#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar1 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar2 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar3 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar4 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar5 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}
    </style>
</head>

<body>
<div align="center">
<table width="1024" height="100" border="0" >

  <tr>
     <th width="350" height="96" background="images/logo.png"></th>
	 <th width="571"></th>
	 <th width="81" background="images/emblam.png"></th>
  </tr>
</table> 

 <table width="1024" height="42" bordercolor="#FF0000" bgcolor="#FF0000"  backgroundcolor="#FF0000">
          <tr>
            <th width="295" height="23" scope="col"><a href="index.php" class="menu"><font color="#FFFFFF">HOME</font></a></th>
            <th width="295" scope="col"><a href="Register_Sender.php" class="menu"><font color="#FFFFFF">REGISTRATION</font></a></th>
			<th width="295" scope="col"><a href="" class="menu"><font color="#FFFFFF">TRACK</font></a></th>
            <th width="295" scope="col"><a href="Details.php" class="menu"><font color="#FFFFFF">DETAILS</font></a></th>
			<th width="295" scope="col"><a href="About_Us.php" class="menu"><font color="#FFFFFF">ABOUT US </font></a></th>
          </tr>
</table>

 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
			
			<table width="1024" height="198" border="0" align="center" bordercolor="#FF0000" style="border:4px solid #FF0000">
              <tr>
                <td width="10"></td>
                <td width="983" height="94">
				
				<?php
				
				if (isset($_POST["Track"]))
 				{ 
				
				// connect to the "indian_post_db" database
				$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
				// check connection
				if (mysqli_connect_errno()) 
				{
				  exit('Connect Failed: '. mysqli_connect_error());
				}//if end
				//SCRS10370002IN
				//SCPS10370001IN
				// SELECT sql query
				$sql ="select LPO1_Name from currier_info_db where Registration_ID = 'SCRS10370002IN'";
				$sql1 ="select RMS1_Name from currier_info_db where Registration_ID = 'SCRS10370002IN'";
				$sql2 ="select RMS2_Name from currier_info_db where Registration_ID = 'SCRS10370002IN'";
				$sql3 ="select GPO_Name from currier_info_db where Registration_ID = 'SCRS10370002IN'";
				$sql4 ="select LPO2_Name from currier_info_db where Registration_ID = 'SCRS10370002IN'";
				
				// perform the query and store the result
				$result = $conn->query($sql);
				$result1 = $conn->query($sql1);
				$result2 = $conn->query($sql2);
				$result3 = $conn->query($sql3);
				$result4 = $conn->query($sql4);
				
				// if the $result contains at least one row
				if ($result->num_rows > 0) 
				{
				  // output data of each row from $result
				  while($row = $result->fetch_assoc()) 
				  {
					//echo $row['LPO1_Name'];
					$row_data = $row['LPO1_Name'];
				  }//while end
				}//if end
				
				if ($result1->num_rows > 0) {
				  // output data of each row from $result
				  while($row1 = $result1->fetch_assoc()) {
					//echo $row['LPO1_Name'];
					$row_data1 = $row1['RMS1_Name'];
				  }
				}
				
				if ($result2->num_rows > 0) {
				  // output data of each row from $result
				  while($row2 = $result2->fetch_assoc()) {
					//echo $row['LPO1_Name'];
					$row_data2 = $row2['RMS2_Name'];
				  }
				}
				
				if ($result3->num_rows > 0) {
				  // output data of each row from $result
				  while($row3 = $result3->fetch_assoc()) {
					//echo $row['LPO1_Name'];
					$row_data3 = $row3['GPO_Name'];
				  }
				}
				
				if ($result4->num_rows > 0) {
				  // output data of each row from $result
				  while($row4 = $result4->fetch_assoc()) {
					//echo $row['LPO1_Name'];
					$row_data4 = $row4['LPO2_Name'];
				  }
				}
				else {
				  echo '0 results';
				}
				
				$conn->close();
				
				//////////////////////////////////////////////////////////////////////////////
				/////////////////////////////////////////////////////////////////////////////
								
				// Total processes
				$i = 0;
				$total = 10;
				
				echo '<table width="1024" height = "25">';
				echo '<tr>';
				
				if($row_data != '' && $row_data1 != '' && $row_data2 != '' && $row_data3 != '' && $row_data4 != '')
				{
						echo '<td>';
						echo '<div id="myProgress">';
						echo '<div id="myBar5"></div>';
						echo '</div>';
						echo "<font color='red'>Parcel Delivered</font>";
						echo '</td>';
				}
				else
				{
					
				// Loop through process
				for($i=1; $i<=$total; $i++)
				{
					// Calculate the percentation
					$percent = intval($i/$total * 100)."%";
								
					
						if($i == 1 && $row_data != '')
						{
							echo '<td>';
							echo '<div id="myProgress">';
							echo '<div id="myBar"></div>';
							echo '</div>';
							echo '</td>';
							
							if($i == 4 && $row_data1 != '')
							{	
								echo '<td>';
								echo '<div id="myProgress">';
								echo '<div id="myBar1"></div>';
								echo '</div>';
								echo '</td>';
								
								if($i == 6 && $row_data2 != '')
								{
									echo '<td>';
									echo '<div id="myProgress">';
									echo '<div id="myBar2"></div>';
									echo '</div>';
									echo '</td>';
									
									if($i == 8 && $row_data3 != '')
									{
										echo '<td>';
										echo '<div id="myProgress">';
										echo '<div id="myBar3"></div>';
										echo '</div>';
										echo '</td>';
										
										if($i == 9 && $row_data4 != '')
										{
											echo '<td>';
											echo '<div id="myProgress">';
											echo '<div id="myBar4"></div>';
											echo '</div>';
											echo '</td>';
										}
										else//4end
										{
											//echo "Pracel is on the way.. From : GPO To LPO2";
											echo "<font color='red'>Pracel is on the way.. From : ".$row_data3."  To  ".$row_data4."</font>";
										}
									}
									else//3end
									{
										//echo "Pracel is on the way.. From : RMS2 To GPO";
										echo "<font color='red'>Pracel is on the way.. From : ".$row_data2."  To  ".$row_data3."</font>";
									}
								}
								else//2end
								{
									//echo "Pracel is on the way.. From : RMS1 To RMS2";
									echo "<font color='red'>Pracel is on the way.. From : ".$row_data1."  To  ".$row_data2."</font>";
								}
							}
							else//1end
							{
								//echo "Pracel is on the way.. From : LPO1 To RMS1";
								echo "<font color='red'>Pracel is on the way.. From : ".$row_data."  To  ".$row_data1."</font>";
							}
						}
				  } 
				  echo '</tr>';
				echo '</table>';
				}
				}
				?>
				
                <td width="11"></td>
              </tr>
              <tr>
                 <td width="10"></td>
                <td width="983" height="90" >
					
					<table width="1024" height = "25">
					
					<tr>
					
					<td>
						<div id="myProgress">
						<div id="myBar"></div>
						</div>
					</td>
					
					<td>
						<div id="myProgress">
						<div id="myBar1"></div>
						</div>
					</td>
					
					<td>
						<div id="myProgress">
						<div id="myBar2"></div>
						</div>
					</td>
					
					<td>
						<div id="myProgress">
						<div id="myBar3"></div>
						</div>
					</td>
					
					<td>
						<div id="myProgress">
						<div id="myBar4"></div>
						</div>
					</td>
					
					</tr>
					
					<tr>
					
					<td>
					From LPO1 To RMS1
					</td>
					
					<td>
					From RMS1 To RMS2
					</td>
					
					<td>
					From RMS2 To GPO
					</td>
					
					<td>
					From GPO To LPO2
					</td>
					
					</tr>
					
					</table>
				
                </td>
                <td width="11"></td>
              </tr>
            </table>
			
			<p></p>
			</th>
          </tr>
</table>

<?PHP

			 
			 $Sender_Initials = "SC";
			 $Receiver_Initials = "PS";
			 $Sender_Zip_Code = "10";
			 $Receiver_Zip_Code = "37";
			 $Country_Code = "IN";
			 
			 //$Number = uniqid();
			 
			 $Number = rand(0000,9999);
			 
			 //$d = $Sender_Initials.split("");
			 
			 //SP10370001IN
			 //$Number1 = min($Sender_Initials ,$Receiver_Initials,$Sender_Zip_Code,$Receiver_Zip_Code,$Number,$Country_Code);
			 
			 
			  
			 $Registration_ID = "$Sender_Initials$Receiver_Initials$Sender_Zip_Code$Receiver_Zip_Code$Number$Country_Code";
			  
			  echo  $Registration_ID;
			   //echo  $Number1;
			   //echo  $Number;
			   
			   //echo $d;

?>

<table>

<tr>

<td>

<form name="Track" id = "Track" method="post" onsubmit="showUser(this.value)">
<input type="text" name="Consignment_Number" />
<input type="submit" name="Track" value="Track / Trace" />
</form>
<br>
<div id="txtHint"><b>Result Display</b></div>

</td>

</tr>

<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
     } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
             }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</table>
<?php
echo date("Y-m-d H:i:s");
echo (new \DateTime())->format("Y-m-d H:i:s");
$date = (new \DateTime())->format("Y-m-d H:i:s");
echo $date;
//echo DATE_ATOM();
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</body>
</html>



