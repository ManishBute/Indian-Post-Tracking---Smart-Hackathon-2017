<?php
 if (isset($_POST["Enter"]))
 {
  $Registration_ID=$_POST["Consignment_Number"];
  $Way_Zip_Code=$_POST["Way_Zip_Code"];
  $RMS_Zip_Code=$_POST["RMS_Zip_Code"];
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
.style2 {color: #333333}
-->
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
			<th width="295" scope="col"><a href="Track.php" class="menu"><font color="#FFFFFF">TRACK</font></a></th>
            <th width="295" scope="col"><a href="Details.php" class="menu"><font color="#FFFFFF">DETAILS</font></a></th>
			<th width="295" scope="col"><a href="About_Us.php" class="menu"><font color="#FFFFFF">ABOUT US </font></a></th>
          </tr>
</table>

 <form name="Enter" id = "Enter" method="post" action="Track_Result.php" onsubmit="return validation()">
 
 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
			
			<?php
			
					// connect to the "indian_post_db" database
					$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
//////////1st if////////////
					// check connection
					if (mysqli_connect_errno()) 
					{
					  exit('Connect Failed: '. mysqli_connect_error());
					}
//////////1st if end////////////
				
					// SELECT sql query
					$sqlsearchreg ="select * from currier_info_db where Registration_ID = '$Registration_ID'";
					
					$resultsearchreg=mysqli_query($conn,$sqlsearchreg);
					// perform the query and store the result
					//$resultsearchreg = $conn->query($sqlsearchreg);
					$nrows=mysqli_num_rows($resultsearchreg);
					
//////////2nd if////////////
					// if the $result contains at least one row
					if ($nrows > 0) 
					{
						//echo 'get';
					

//////////1nd if end////////////


					//////////////////////////////////////
					////////////////////////////////////
					///////////////////////////////////
			
			
				 	//connect to the "indian_post_db" database
					$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
//////////3rd if////////////
					// check connection
					if (mysqli_connect_errno()) 
					{
					  exit('Connect Failed: '. mysqli_connect_error());
					}
//////////3rd if end////////////
				
					// SELECT sql query
					$sqlsearch ="select LPO1_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					
					// perform the query and store the result
					$resultsearch = $conn->query($sqlsearch);
					
//////////4th if////////////
					// if the $result contains at least one row
					if ($resultsearch->num_rows > 0) 
					{
//////////1st while////////////
					  // output data of each row from $result
					  while($rowsearch = $resultsearch->fetch_assoc()) 
					  {
						//echo $row['LPO1_Name'];
						$row_datasearch = $rowsearch['LPO1_Name'];
					  }
//////////1st while end////////////
					}
//////////4tt if end////////////
					
//////////5th if////////////
					if($row_datasearch != '')
					{
						$conn->close();	
				 		//$Registration_ID=$Registration_ID;
				
//////////6th if////////////
						if (isset($_POST["Enter"]))
						{ 
				
							// connect to the "indian_post_db" database
							$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
						
//////////7th if//////////////
							// check connection
							if (mysqli_connect_errno()) 
							{
							  exit('Connect Failed: '. mysqli_connect_error());
							}
//////////7th if end//////////////
						
							// SELECT sql query
							$sql ="select RMS1_Name from currier_info_db where Registration_ID = '$Registration_ID'";
							$sql1 ="select RMS2_Name from currier_info_db where Registration_ID = '$Registration_ID'";
					
							// perform the query and store the result
							$result = $conn->query($sql);
							$result1 = $conn->query($sql1);
					
//////////8th if//////////////
							// if the $result contains at least one row
							if ($result->num_rows > 0) 
							{
//////////2nd while////////////////
							  // output data of each row from $result
							  while($row = $result->fetch_assoc()) 
							  {
								//echo $row['LPO1_Name'];
								$row_data = $row['RMS1_Name'];
							  }
//////////2nd while end////////////////
							}
//////////8th if end////////////
					
//////////9th if////////////
							// if the $result contains at least one row
							if ($result1->num_rows > 0) 
							{
//////////3rd while////////////
							  // output data of each row from $result
							  while($row1 = $result1->fetch_assoc()) 
							  {
								//echo $row['LPO1_Name'];
								$row_data1 = $row1['RMS2_Name'];
							  }
//////////3rd while end////////////
							}
//////////9th if end////////////
					
//////////9th else////////////
							else 
							{
							  echo '0 results';
							  echo 'Not Found..';
							  echo '<div>';
							  echo '<a href="index.php">';
							  echo '<font color="red">';
							  echo 'Click For Next';
							  echo '</font>';
							  echo '</div>';
							}
//////////9th else end////////////
					
							$Registration_ID = $Registration_ID ;
				
							//////////////////////////////////////////////////////////////////////////////
							/////////////////////////////////////////////////////////////////////////////
											
							// Total processes
							$i = 0;
							$total = 10;
						
//////////10th if/////////////
							if($row_data1 != '')
							{
									echo 'Parcel Dispatched From : RMS : ';
									echo $row_data1;
									echo 'Successfully Done';
									echo '<div>';
							  echo '<a href="index.php">';
							  echo '<font color="red">';
							  echo 'Click For Next';
							  echo '</font>';
							  echo '</div>';
							}
//////////10th if end////////////

//////////10th else////////////
							else
							{
//////////11th if////////////////////
								if($row_data != '')
								{
									echo 'Parcel Dispatched From : RMS : ';
									echo $row_data;
									echo 'Successfully Done';
									echo '<div>';
							  echo '<a href="index.php">';
							  echo '<font color="red">';
							  echo 'Click For Next';
							  echo '</font>';
							  echo '</div>';
									
									// connect to the "indian_post_db" database
									$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
								
///////////////////12th if////////////
									// check connection
									if (mysqli_connect_errno()) 
									{
									  exit('Connect Failed: '. mysqli_connect_error());
									}
//////////12th if end///////////////////
						
									// SELECT sql query
									$sql ="select Post_Office_Name from post_office_db where Post_Office_Zip_Code = '$Way_Zip_Code'";
								
									// perform the query and store the result
									$result = $conn->query($sql);
								
//////////13th if/////////////////////
									// if the $result contains at least one row
									if ($result->num_rows > 0) 
									{
//////////4th while//////////////////////
									  // output data of each row from $result
									  while($row = $result->fetch_assoc()) 
									  {
										//echo $row['LPO1_Name'];
										$row_data = $row['Post_Office_Name'];
									  }
//////////4th while end/////////////////
									}
//////////13th if end//////////////////
								
									//$sqldata ="insert into currier_info_db (RMS2_Name, RMS2_Zip_Code) values('$row_data', '$RMS_Zip_Code')";	
							
									$sqldata1 ="update currier_info_db set RMS2_Name = '$row_data' ,RMS2_Zip_Code = '$RMS_Zip_Code' where Registration_ID = '$Registration_ID'";
							
									//$conn->query($sqldata);
									$conn->query($sqldata1);
									
									$conn->close();	
								}
//////////11th if end///////////////
						
//////////11th else//////////////
								else
								{
									//echo "Enter Data";
									//echo $Registration_ID;
									
									// connect to the "indian_post_db" database
									$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
								
//////////14th if//////////////////////
									// check connection
									if (mysqli_connect_errno()) 
									{
									  exit('Connect Failed: '. mysqli_connect_error());
									}
//////////14th if end/////////////////
					
									// SELECT sql query
									$sql ="select Post_Office_Name from post_office_db where Post_Office_Zip_Code = '$Way_Zip_Code'";
									
									// perform the query and store the result
									$result = $conn->query($sql);
									
//////////15th if//////////////////////
									// if the $result contains at least one row
									if ($result->num_rows > 0) 
									{
//////////5th while/////////////////////
									  // output data of each row from $result
									  while($row = $result->fetch_assoc()) 
									  {
										//echo $row['LPO1_Name'];
										$row_data = $row['Post_Office_Name'];
									  }
//////////5th while end/////////////////
									}
//////////15th if end//////////////////
							
									//////////////////
									///////////////
									
									//$sqldata ="insert into currier_info_db (RMS1_Name, RMS1_Zip_Code) values('$row_data', '$RMS_Zip_Code') where Registration_ID = '$Registration_ID'";
										
									//$sqldata ="insert into currier_info_db (RMS1_Name, RMS1_Zip_Code) values('$row_data', '$RMS_Zip_Code')";	
									
									$sqldata1 ="update currier_info_db set RMS1_Name = '$row_data' ,RMS1_Zip_Code = '$RMS_Zip_Code' where Registration_ID = '$Registration_ID'";
							
									//$conn->query($sqldata);
									$conn->query($sqldata1);
									
									$conn->close();	
								}
//////////11th else end////////////

							}
//////////6th if end//////////////

						}
//////////5th if end////////////
				
//////////5th else////////////
						else
						{
							echo 'Unregistered Parcel';
							$conn->close();
						}	
//////////5th else end////////////
					}
//////////6th else////////////
						else
						{
							echo 'Not Found';
							$conn->close();	
						}
//////////6th else end////////////
			}
			
			else
			{
				echo 'Not Found..';
				echo '<div>';
							  echo '<a href="index.php">';
							  echo '<font color="red">';
							  echo 'Click For Next';
							  echo '</font>';
							  echo '</div>';
			}

				?>
			
			</th>
          </tr>
</table>

</form>

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



