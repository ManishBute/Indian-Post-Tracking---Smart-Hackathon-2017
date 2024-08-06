<?php
 if (isset($_POST["Track"]))
 {
  $Registration_ID=$_POST["Consignment_Number"];
  $User_Name=$_POST["User_Name"];
  $User_Zip_Code=$_POST["User_Zip_Code"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Government of India, Department of Post
</title>
<meta http-equiv="refresh" content="5" />

    <style type="text/css">
<!--
.style1 {font-size: 12px; color: #FFFFFF; }
-->

#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 20%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar1 {
  width: 40%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar2 {
  width: 60%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar3 {
  width: 70%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar4 {
  width: 80%;
  height: 30px;
  background-color: #4CAF50;
}

#myBar5 {
  width: 100%;
  height: 30px;
  background-color: #4CAF50;
}
    .style2 {color: #333333}
    </style>
</head>

<body>
<div align="center">
<table width="1024" height="100" border="0" >

  <tr>
     <th width="350" height="96" background="images/logo.png"></th>
	 <th width="571"><p><strong><font color="red">R.M.S. Official</font></strong></p>
      <p class="style2">( Railway Mail Services ) </p></th>
	 <th width="81" background="images/emblam.png"></th>
  </tr>
</table> 

 <table width="1024" height="42" bordercolor="#FF0000" bgcolor="#FF0000"  backgroundcolor="#FF0000">
          <tr>
            <th width="295" height="23" scope="col"><a href="index.php" class="menu"><font color="#FFFFFF">HOME</font></a></th>
            <th width="295" scope="col"><a href="Complete_List.php" class="menu"><font color="#FFFFFF">COMPLETE LIST </font></a></th>
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
				 
				 $Registration_ID=$Registration_ID;
				
				if (isset($_POST["Track"]))
 				{ 
				
					// connect to the "indian_post_db" database
					$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
					// check connection
					if (mysqli_connect_errno()) 
					{
					  exit('Connect Failed: '. mysqli_connect_error());
					}//if end
				
					// SELECT sql query
					$sql ="select LPO1_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					$sql1 ="select RMS1_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					$sql2 ="select RMS2_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					$sql3 ="select GPO_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					$sql4 ="select LPO2_Name from currier_info_db where Registration_ID = '$Registration_ID'";
				
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
				
				
					if($row_data != '' && $row_data1 != '' && $row_data2 != '' && $row_data3 != '' && $row_data4 != '')
					{
							echo '<div id="myProgress">';
							echo '<div id="myBar5"></div>';
							echo '</div>';
							echo "<font color='red'>Parcel Delivered</font>";
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
								echo '<div id="myProgress">';
								echo '<div id="myBar"></div>';
								echo '</div>';
								
								if($i == 4 && $row_data1 != '')
								{
									echo '<div id="myProgress">';
									echo '<div id="myBar1"></div>';
									echo '</div>';
									
									if($i == 6 && $row_data2 != '')
									{
										echo '<div id="myProgress">';
										echo '<div id="myBar2"></div>';
										echo '</div>';
										
										if($i == 8 && $row_data3 != '')
										{
											echo '<div id="myProgress">';
											echo '<div id="myBar3"></div>';
											echo '</div>';
											
											if($i == 9 && $row_data4 != '')
											{
												echo '<div id="myProgress">';
												echo '<div id="myBar4"></div>';
												echo '</div>';
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
				}
				}
				?>
				
                <td width="11"></td>
              </tr>
              <tr>
                 <td width="10"></td>
                <td width="983" height="90" >
			
                </td>
                <td width="11"></td>
              </tr>
            </table>
			
			<p></p>
			<table width="1024" height="198" border="0" align="center" bordercolor="#FF0000" style="border:4px solid #FF0000">
              <tr>
			  <td width="1000"></td>
                <td width="1000" height="41"><div align="center"><font color="red">Tracking Details</font></div></td>
				<td width="1000"></td>
              </tr>
			  
			  <tr>
                <td width="1000"></td>
                <td width="1000" height="94" align="center">
					<p>
					
						<?php
						if (isset($_POST["Track"]))
 						{
						// connect to the "indian_post_db" database
						$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
						
						// check connection
						if (mysqli_connect_errno()) {
						  exit('Connect Failed : '. mysqli_connect_error());
						}
						
						// SELECT sql query
						$sql ="select Registration_ID, Registration_Date from currier_info_db where Registration_ID='$Registration_ID'";
						
						// perform the query and store the result
						$result = $conn->query($sql);
						
						// if the $result contains at least one row
						if ($result->num_rows > 0) {
						  // output data of each row from $result
						  while($row = $result->fetch_assoc()) {
						  	echo '<table align="center" bordercolor="#FF0000" style="border:4px solid #FF0000" font color="red">';
							echo '<tr>';
							echo '<td><font color="red">';
							echo 'Registration_ID: ';
							echo '<font color="red"></td>';
							echo '<td><font color="red">'. $row['Registration_ID'];
							echo '<font color="red"></td>';
							echo '</tr>';
							
							echo '<tr>';
							echo '<td><font color="red">';
							echo 'Registration_Date: ';
							echo '<font color="red"></td>';
							echo '<td><font color="red">'. $row['Registration_Date'];
							echo '<font color="red"></td>';
							echo '</tr>';
							
							echo '<tr>';
							echo '<td><font color="red">';
							echo 'Registration_Date: ';
							echo '<font color="red"></td>';
							echo '<td><font color="red">'. $row['Registration_Date'];
							echo '<font color="red"></td>';
							echo '</tr>';
							
							echo '</table>';

						  }
						}
						else {
						  echo '0 results';
						}

						$conn->close();
						}
						?>
					
					</p>
					</td>
                <td width="1000"></td>
              </tr>

            </table>
			
			</th>
          </tr>
</table>

  <table width="1024" height="140" bordercolor="#FFFFFF" bgcolor="#544e4d"  backgroundcolor="#544e4d">
          <tr>
            <th width="300" height="140" scope="col">
			
			  <p align="left"><a title="DoP Home" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/IndiaPosthome.aspx">Home</a></p>
              <p align="left"><a title="About Us" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/AboutUs/AboutUs.aspx">About Us</a> </p>
              <p align="left"><a title="Contact Us" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/content/ContactUs.aspx">Contact Us</a>              </p>
              <p align="left"><a title="Sitemap" class="style1" href="https://www.indiapost.gov.in/VAS/pages/sitemap.aspx">Sitemap</a></p>
              <p align="left"><a title="RTI" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/RTI/RTI.aspx">RTI</a></p>
              <p align="left"><a title="Employee Corner" class="style1" href="https://www.indiapost.gov.in/_layouts/15/DOP.Portal.UILayer/UnsecuredLinkHandler.aspx?Link=utilities" target="_blank">Employee Corner</a></p>
              <p align="left"><a title="CEPT" class="style1" href="https://www.indiapost.gov.in/_layouts/15/DOP.Portal.UILayer/UnsecuredLinkHandler.aspx?Link=cept" target="_blank">CEPT</a></p>
		   </th>
		   
           <th width="300" scope="col">
	         <p align="left"><a title="Forms" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Form.aspx">Forms</a></p>
              <p align="left"><a title="Help &amp; FAQs" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/faqs.aspx">Help &amp; FAQs</a></p>
              <p align="left"><a title="Tenders (External website that opens in a new window)" class="style1" href="https://www.indiapost.gov.in/_layouts/15/DOP.Portal.UILayer/UnsecuredLinkHandler.aspx?Link=tenders" target="_blank">Tenders</a></p>
              <p align="left"><a title="Opportunities" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/ViewAllDocREpository.aspx?Category=Recruitment">Opportunities</a></p>
              <p align="left"><a title="DoP Holidays" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Holidays.aspx">Holidays</a></p>
              <p align="left"><a title="Download Fonts" class="style1" href="https://www.indiapost.gov.in/VAS/DOP_PDFFiles/fonts.zip">Download Fonts</a></p>
              <p align="left"><a title="Related Links" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/RelatedLinks.aspx">Related Links</a></p>
			</th>
            
			<th width="300" scope="col">
			  <p align="left"><a title="e-Mail" class="style1" href="https://webmail.indiapost.gov.in/">e-Mail</a></p>
              <p align="left"><a title="Disclaimer" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/disclaimer.aspx">Disclaimer</a></p>
              <p align="left"><a title="Privacy Policy" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/PrivacyPolicy.aspx">Privacy Policy</a></p>
              <p align="left"><a title="Copyright Policy" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/Copyright.aspx">Copyright Policy</a></p>
              <p align="left"><a title="Terms &amp; Conditions" class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/TermsConditions.aspx">Terms &amp; Conditions</a></p>
              <p align="left"><a class="style1" href="https://www.indiapost.gov.in/VAS/Pages/Content/Web-Informations-Manager.aspx" title="Web Information Manager">Web Information Manager</a></p>
              <p align="left"><a title="STQC Report" class="style1" href="https://www.indiapost.gov.in/VAS/DOP_PDFFiles/Final%20Security%20Test%20Report%20DOP-CSI%2024092015.pdf" target="_blank">STQC Report</a></p>
		</th>

		<th width="300" scope="col">
		
		<a title="Digital India (External Site that opens in a new window)" href="http://www.digitalindia.gov.in/" target="_blank"></a> 
		<a title="My Gov (External Site that opens in a new window)" href="https://mygov.in/" target="_blank"></a> 
		<a title="National Portal of India (External Site that opens in a new window)" href="http://www.india.gov.in/" target="_blank"></a> 
		<a title="Open Gov Platform (External Site that opens in a new window)" href="http://ogpl.gov.in/" target="_blank"></a>		
		
		</th>	
	</tr>
   
</table>

<table width="1024" height="140" bordercolor="#FF0000" bgcolor="#FF0000"  backgroundcolor="#FF0000" >
    <tr>
        <th width="300" scope="col" class="style1">This website belongs to Department of Posts, Ministry of Communications, Government of India</th>
	</tr>
	
	<tr>
         <th width="300" scope="col" class="style1">Site Created and Maintained by SRC CompTech Pvt Ltd.</th>
	</tr>
	
	<tr>
		<th width="300" scope="col" class="style1">Site is best viewed in Google Chrome, Internet Explorer 9.0 and above at 1024 x 768 resolution</th>
	</tr>
	
	<tr>
       <th width="300" scope="col" class="style1">Last updated on  21-Mar-2017</th>
	</tr>
	
	<tr>
	    <th width="300" scope="col" class="style1">SRC</th>
    </tr>
	
</table>
</div>
</body>
</html>



