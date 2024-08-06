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
	
	    <style type="text/css">
<!--
.style1 {font-size: 12px; color: #FFFFFF; }
.style2 {color: #333333}
-->
    </style>
	
	<script type="text/javascript">
 function validation()
 {
  var RMS_Date=document.index.RMS_Date.value;
  var RMS_Zip_Code=document.index.RMS_Zip_Code.value;
	
	if (RMS_Date=="")
	{
	 alert("Please Enter Date");
	 document.index.Way_Zip_Code.focus();
	 return false;
	}
	
	if (RMS_Zip_Code=="")
	{
	 alert("Please Enter RMS Zip Code");
	 document.index.RMS_Zip_Code.focus();
	 return false;
	}
	</script>
	
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

 <form name="Enter" id = "Enter" method="post" action="List_Result.php" onsubmit="return validation()">
 
 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF">
          <tr>
            <th width="295" height="23" scope="col">
			
			<table width="600" height="53" border="0" align="center" style="border:4px solid  #FF0000">
              <tr>
                <td width="377" height="41"><div align="center"><font color="red">Enter Details</font></div></td>
              </tr>
            </table>
			
			<p>&nbsp;</p>
			
			<table width="600" height="135" border="0" align="center" style="border:4px solid  #FF0000">

              <tr>
                <td width="500"><div align="center">
                  <p><font color="red">Enter Date </font></p>
                  <p>&nbsp;</p>
                </div></td>
                <td width="500"><div align="center"> 
                  <p>
                    <input type="text" name="Currier_Date" />
                  </p>
                  <p class="style2">Ex. 2017-01-24 </p>
                </div></td>
				<td width="500"><p>&nbsp;</p>			    </td>
              </tr>
			  
			  <tr>
                <td width="500"><div align="center">
                  <p><font color="red">Enter Zip Code</font></p>
                  <p><font color="red">(RMS Zip Code) </font></p>
                  <p>&nbsp;</p>
                </div></td>
                <td width="500"><div align="center"> 
                  <p>
                    <input type="text" name="RMS_Zip_Code" />
                  </p>
                  <p class="style2">Ex. 440001</p>
                </div></td>
				<td width="500"><p>&nbsp;</p>			    </td>
              </tr>
			  
			  <tr><div align="center">
			  <td></td>
                <td width="500"><p>&nbsp;
                  </p>
                  <p>
                    <input type="submit" name="Enter" value="Submit" />
                  </p>                </td>
				  <td></td>
				  </div>
              </tr>
            </table>	
			
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



