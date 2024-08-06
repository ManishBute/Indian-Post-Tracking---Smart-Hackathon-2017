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
	
	
	<script type="text/javascript">
 function validation()
 {
  var Sender_Name=document.Post_Registration_Script.Sender_Name.value;
  var Sender_Contact_Number=document.Post_Registration_Script.Sender_Contact_Number.value;
  var Sender_Address=document.Post_Registration_Script.Sender_Address.value;
  var Sender_Zip_Code=document.Post_Registration_Script.Sender_Zip_Code.value;
  var Sender_City_Village=document.Post_Registration_Script.Sender_City_Village.value;
  var Sender_District=document.Post_Registration_Script.Sender_District.value;
  var Sender_State=document.Post_Registration_Script.Sender_State.value;
  var Sender_Country=document.Post_Registration_Script.Sender_Country.value;
  
  	if (Sender_Name=="")
	{
	 alert("Please Enter Sender Name");
	 document.Post_Registration_Script.Sender_Name.focus();
	 return false;
	}
	
	if (Sender_Contact_Number=="")
	{
	 alert("Please Enter Sender Contact Number");
	 document.Post_Registration_Script.Sender_Contact_Number.focus();
	 return false;
	}
	
	if (Sender_Address=="")
	{
	 alert("Please Enter Sender Address");
	 document.Post_Registration_Script.Sender_Address.focus();
	 return false;
	}
	
	if (Sender_Zip_Code=="")
	{
	 alert("Please Enter Sender Zip Code");
	 document.Post_Registration_Script.Sender_Zip_Code.focus();
	 return false;
	}
	
	if (Sender_City_Village=="")
	{
	 alert("Please Enter Sender City Or Village");
	 document.Post_Registration_Script.Sender_City_Village.focus();
	 return false;
	}
	
	if (Sender_District=="")
	{
	 alert("Please Enter Sender District");
	 document.Post_Registration_Script.Sender_District.focus();
	 return false;
	}
	
	if (Sender_State=="")
	{
	 alert("Please Enter Sender State");
	 document.Post_Registration_Script.Sender_State.focus();
	 return false;
	}
	
	if (Sender_Country=="")
	{
	 alert("Please Enter Sender Country");
	 document.Post_Registration_Script.Sender_Country.focus();
	 return false;
	}
	
	var Receiver_Name=document.Post_Registration_Script.Receiver_Name.value;
  var Receiver_Contact_Number=document.Post_Registration_Script.Receiver_Contact_Number.value;
  var Receiver_Address=document.Post_Registration_Script.Receiver_Address.value;
  var Receiver_Zip_Code=document.Post_Registration_Script.Receiver_Zip_Code.value;
  var Receiver_City_Village=document.Post_Registration_Script.Receiver_City_Village.value;
  var Receiver_District=document.Post_Registration_Script.Receiver_District.value;
  var Receiver_State=document.Post_Registration_Script.Receiver_State.value;
  var Receiver_Country=document.Post_Registration_Script.Receiver_Country.value;
  
  	if (Receiver_Name=="")
	{
	 alert("Please Enter Receiver Name");
	 document.Post_Registration_Script.Receiver_Name.focus();
	 return false;
	}
	
	if (Receiver_Contact_Number=="")
	{
	 alert("Please Enter Receiver Contact Number");
	 document.Post_Registration_Script.Receiver_Contact_Number.focus();
	 return false;
	}
	
	if (Receiver_Address=="")
	{
	 alert("Please Enter Receiver Address");
	 document.Post_Registration_Script.Receiver_Address.focus();
	 return false;
	}
	
	if (Receiver_Zip_Code=="")
	{
	 alert("Please Enter Receiver Zip Code");
	 document.Post_Registration_Script.Receiver_Zip_Code.focus();
	 return false;
	}
	
	if (Receiver_City_Village=="")
	{
	 alert("Please Enter Receiver City Or Village");
	 document.Post_Registration_Script.Receiver_City_Village.focus();
	 return false;
	}
	
	if (Receiver_District=="")
	{
	 alert("Please Enter Receiver District");
	 document.Post_Registration_Script.Receiver_District.focus();
	 return false;
	}
	
	if (Receiver_State=="")
	{
	 alert("Please Enter Receiver State");
	 document.Post_Registration_Script.Receiver_State.focus();
	 return false;
	}
	
	if (Receiver_Country=="")
	{
	 alert("Please Enter Receiver Country");
	 document.Post_Registration_Script.Receiver_Country.focus();
	 return false;
	}
	
}
</script>

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

<form action="Post_Registration_Script.php" method="post" name="Post_Registration_Script" id="Post_Registration_Script" onsubmit="return validation()">
 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
			
			<div align="center">
              
              	<table width="1024" height="500" border="0" align="center" style="border:4px solid  #FF0000" background="images/wood-background-4.png" >
           	<tr>
            	<td colspan="4"><div align="center"><strong><font color="red">SENDER INFO</font></strong></div></td>
            </tr>
			
            <tr>
             <td width="300"><div align="center">&nbsp;</div></td>
             <td width="300"><div align="center"><font color="red"><b><h3>Name :</h3> </b></font></div></td>
             <td width="300"><div align="center"><input type="text" name="Sender_Name" /></div></td>
             <td width="300"><div align="center">&nbsp;</div></td>
           </tr>
		   
           <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Contact No. :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_Contact_Number" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Address :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_Address" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Country :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_Country" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>State :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_State"></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>District :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_District"></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>City / Village :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_City_Village" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Zip Code :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Sender_Zip_Code" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
         </table>

            </div>
			
			</th>

          </tr>
</table>

 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
		
			<div align="center">

		 <table width="1024" height="500" border="0" align="center" style="border:4px solid  #FF0000" background="images/wood-background-4.png" >
           	<tr>
            	<td colspan="4"><div align="center"><strong><font color="red">RECEIVER INFO</font></strong></div></td>
            </tr>
			
            <tr>
             <td width="300"><div align="center">&nbsp;</div></td>
             <td width="300"><div align="center"><font color="red"><b><h3>Name :</h3> </b></font></div></td>
             <td width="300"><div align="center"><input type="text" name="Receiver_Name" /></div></td>
             <td width="300"><div align="center">&nbsp;</div></td>
           </tr>
		   
           <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Contact No. :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_Contact_Number" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Address :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_Address" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Country :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_Country" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>State :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_State"></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>District :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_District"></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>City / Village :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_City_Village" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
		   
		   <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Zip Code :</h3></b></font></div></td>
             <td><div align="center"><input type="text" name="Receiver_Zip_Code" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>

         </table>
		 
		 <p>
		 
		 <table>
		 
		 <tr>
		 
		 <td>
					 
		 <?php

			 $Country_Code = "IN";
			 $random = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
			 $random = substr($random,0,4);

			 $Number = rand(000000,999999);
			 
			 $Registration_ID = "$random$Number$Country_Code";
			  //echo $_POST["$Registration_ID"];
 				
				$Registration_Date = (new \DateTime())->format("Y-m-d H:i:s");
				
			   echo '<table>';
			    echo '<tr>';
				 echo '<td>';
				 echo '<font color="red">';
				  echo "Registration_ID : ";
				  echo '</font>';
				  echo '</td>';
				   echo '<td>';
			  echo '<div align="center">';
			  echo '<div align="center">';
			  echo '<font color="red">';
			  //echo  $Registration_ID;
			 	echo '<input type="text" name="Registration_ID" value='.$Registration_ID.'>';
				echo '<input type="text" name="Registration_Date" value='.$Registration_Date.'>';
			  echo '</font>';
			  echo '</div>';
			   echo '</div>';
			    echo '</td>';
				 echo '</tr>';
				  echo '</table>';
											
			 ?>

		 </td>
		 
		 </tr>
		 
		 </table>
			
		 </p>

		 <table width="1024" height="50" border="0" align="center" style="border:4px solid  #FF0000" >
		  <tr>
             <td width="150"><div align="center"><input type="Submit" name="Submit" value="Next" /></div></td>
           </tr>
         </table>
            </div>
		
		</th>
	</tr>
	
</table>
</form>

  <table width="1024" height="50" bordercolor="#FFFFFF" bgcolor="#544e4d"  backgroundcolor="#544e4d">
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

		<th width="300" scope="col">&nbsp;</th>	
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



