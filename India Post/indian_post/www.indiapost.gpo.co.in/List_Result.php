<?php
 if (isset($_POST["Enter"]))
 {
  $Currier_Date=$_POST["Currier_Date"];
  $RMS_Zip_Code=$_POST["RMS_Zip_Code"];
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Government of India, Department of Post
</title>
	
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
 
 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
			
			<?php
			
				 	//connect to the "indian_post_db" database
					$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
//////////3rd if////////////
					// check connection
					if (mysqli_connect_errno()) 
					{
					  exit('Connect Failed: '. mysqli_connect_error());
					}
//////////3rd if end////////////
				
					$sql = "SELECT * FROM currier_info_db";
					
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<table>';
							echo '<tr>';
							echo '<td>';
							echo "Registration_ID : " . $row["Registration_ID"]. " - Registration_Date : " . $row["Registration_Date"]. " - Registration_Zip_Code : " . $row["Registration_Zip_Code"].  " - LPO1_Name : " . $row["LPO1_Name"].  " - LPO1_Zip_Code : " . $row["LPO1_Zip_Code"].  " - LPO1_Date_Time : " . $row["LPO1_Date_Time"].  " - RMS1_Name : " . $row["RMS1_Name"].  " - RMS1_Zip_Code : " . $row["RMS1_Zip_Code"].  " - RMS1_Date_Time : " . $row["RMS1_Date_Time"].  " - RMS2_Name : " . $row["RMS2_Name"].  " - RMS2_Zip_Code : " . $row["RMS2_Zip_Code"].  " - RMS2_Date_Time : " . $row["RMS2_Date_Time"].  " - GPO_Name : " . $row["GPO_Name"].  " - GPO_Zip_Code : " . $row["GPO_Zip_Code"]. " - GPO_Date_Time : " . $row["GPO_Date_Time"]. " - LPO2_Name : " . $row["LPO2_Name"].  " - LPO2_Zip_Code : " . $row["LPO2_Zip_Code"].  " - LPO2_Date_Time : " . $row["LPO2_Date_Time"]. " - Sender_Register_Date : " . $row["Sender_Register_Date"]. " - Receiver_Delivery_Date_Time : " . $row["Receiver_Delivery_Date_Time"]. " - Sender_Zip_Code : " . $row["Sender_Zip_Code"]. " - Receiver_Zip_Code : " . $row["Receiver_Zip_Code"]."<br>";
							echo '</td>';
							echo '</tr>';
							echo '</table>';
						}
					} else {
						echo "0 results";
					}
					 $conn->close();

				?>
			
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



