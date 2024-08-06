<?php
session_start();
 if (isset($_POST["Submit"]))
 {

$Sender_Name=$_POST["Sender_Name"];
$Sender_Contact_Number=$_POST["Sender_Contact_Number"];
$Sender_Address=$_POST["Sender_Address"];
$Sender_Country=$_POST["Sender_Country"];
$Sender_State=$_POST["Sender_State"];
$Sender_District=$_POST["Sender_District"];
$Sender_City_Village=$_POST["Sender_City_Village"];
$Sender_Zip_Code=$_POST["Sender_Zip_Code"];


$Receiver_Name=$_POST["Receiver_Name"];
$Receiver_Contact_Number=$_POST["Receiver_Contact_Number"];
$Receiver_Address=$_POST["Receiver_Address"];
$Receiver_Country=$_POST["Receiver_Country"];
$Receiver_State=$_POST["Receiver_State"];
$Receiver_District=$_POST["Receiver_District"];
$Receiver_City_Village=$_POST["Receiver_City_Village"];
$Receiver_Zip_Code=$_POST["Receiver_Zip_Code"];

$Registration_ID=$_POST["Registration_ID"];
$Registration_Date=$_POST["Registration_Date"];
}

if (isset($_POST["Submit_Reg"]))
 {
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
            <th width="295" scope="col"><a href="Register_User.php" class="menu"><font color="#FFFFFF">REGISTRATION</font></a></th>
			<th width="295" scope="col"><a href="Track.php" class="menu"><font color="#FFFFFF">TRACK</font></a></th>
            <th width="295" scope="col"><a href="Details.php" class="menu"><font color="#FFFFFF">DETAILS</font></a></th>
			<th width="295" scope="col"><a href="About_Us.php" class="menu"><font color="#FFFFFF">ABOUT US </font></a></th>
          </tr>
</table>
	  
		  <?php
	  		if (isset($_POST["Submit"]))
 			{
				// connect to the "indian_post_db" database
				$conn = new mysqli('localhost', 'root', '', 'indian_post_db');
				
				// check connection
				if (mysqli_connect_errno()) 
				{
				  exit('Connect Failed: '. mysqli_connect_error());
				}//if end

				// INSERT sql query
				$sqlsender ="insert into snder_info_db (Registration_ID,Sender_Name, Sender_Contact_No, Sender_Address, Sender_Country, Sender_State, Sender_District, Sender_City_Village, Sender_Zip_Code) values('$Registration_ID','$Sender_Name', '$Sender_Contact_Number','$Sender_Address','$Sender_Country','$Sender_State','$Sender_District','$Sender_City_Village','$Sender_Zip_Code');";
					
				$sqlreceiver ="insert into receiver_info_db (Registration_ID,Receiver_Name, Receiver_Contact_Number, Receiver_Address, Receiver_Country, Receiver_State, Receiver_District, Receiver_City_Village, Receiver_Zip_Code) values('$Registration_ID','$Receiver_Name', '$Receiver_Contact_Number','$Receiver_Address','$Receiver_Country','$Receiver_State','$Receiver_District','$Receiver_City_Village','$Receiver_Zip_Code');";
				
				$sqlcurrier ="insert into currier_info_db (Registration_ID,Registration_Date) values('$Registration_ID','$Registration_Date');";
				
				$conn->query($sqlreceiver);

				$conn->query($sqlsender);
				
				$conn->query($sqlcurrier);
				  //mysqli_query($sqlsender);
				  
				  //mysqli_query($sqlreceiver);
			}
				  $conn->close();
				  
				  ?>

<p></p>
<form method="post" name="Generate" action="Register_User.php">
	     	
			
	     	<table width="349" height="135" border="0" align="center" style="border:4px solid  #FF0000" background="images/wood-background-4.png" >
           	<tr>
            	<td width="600"><div align="center"><strong><font color="red">Generate Registration ID</font></strong></div></td>
            </tr>
			

		   
		   <tr>
             <td width="150">
			 <div align="center">
			 
			 <?php

			 //$Country_Code = "IN";
			 //$random = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
			 //$random = substr($random,0,4);

			 //$Number = rand(000000,999999);
			 
			 //$Registration_ID = "$random$Number$Country_Code";
			 echo  $Registration_Date;
			  echo '</br>';
			  echo  $Registration_ID;
			  echo '</br>';
			  echo "Successfully Registered";
			 
			 ?>
			 
			 </div>
			 </td>
           </tr>
		   
         </table>
		 
		 

<p></p>
		 <table width="349" height="135" border="0" align="center" style="border:4px solid  #FF0000" >
		  <tr>
             <td width="150"><div align="center"><input type="Submit" name="Submit_Reg" value="Submit" /><a href="Register_User.php"></a></div></td>
           </tr>
         </table>
<p></p>
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



