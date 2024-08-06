<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="HandheldFriendly" content="true">
    
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
            <th width="295" scope="col"><a href="Login.php" class="menu"><font color="#FFFFFF">LOGIN</font></a></th>
			<th width="295" scope="col"><a href="Track.php" class="menu"><font color="#FFFFFF">TRACK</font></a></th>
            <th width="295" scope="col"><a href="Details.php" class="menu"><font color="#FFFFFF">DETAILS</font></a></th>
			<th width="295" scope="col"><a href="About_Us.php" class="menu"><font color="#FFFFFF">ABOUT US </font></a></th>
          </tr>
</table>

 <table width="1024" height="768" bordercolor="#FFFFFF" bgcolor="#FFFFFF"  backgroundcolor="#FFFFFF" align="center">
          <tr align="center">
            <th width="295" height="23" scope="col" align="center">
            <div align="center">
			<?php
	             if (isset($_SESSION["user"]))
		         {
                     echo "<h2><B>WELCOME</b></h2>."."<B>".$_SESSION["user"]."</B>"."! <a href='Register.php'>Logout</a>";
		         }
	             else
	             {
	        ?>
	   		
			<form method="post" action="login.php" name="login"  onsubmit="return validation()">
	     	<table width="349" height="135" border="0" align="center" style="border:4px solid  #FF0000" background="images/wood-background-4.png" >
           	<tr>
            	<td colspan="4"><div align="center"><strong><font color="red">ADMIN</font></strong></div></td>
            </tr>
			
            <tr>
             <td width="150"><div align="center">&nbsp;</div></td>
             <td width="150"><div align="center"><font color="red"><b><h3>Login ID</h3> </b></font></div></td>
             <td width="150"><div align="center"><input type="text" name="login_id" /></div></td>
             <td width="150"><div align="center">&nbsp;</div></td>
           </tr>
           <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center"><font color="red"><b><h3>Password</h3></b></font></div></td>
             <td><div align="center"><input type="password" name="password" /></div></td>
             <td><div align="center">&nbsp;</div></td>
           </tr>
           <tr>
             <td><div align="center">&nbsp;</div></td>
             <td><div align="center">&nbsp;</div></td>
             <td width="150"><div align="center"><input type="submit" name="Submit" value="Sign in" /></div></td>
           </tr>
           <tr> </tr>
           <tr>
             <td height="20" colspan="4">
			 	 <div align="center">
                 <?php
			   		if (isset($_GET["err"]))
			   		{
			   			echo "<font color='red'> Invalid Login Details.!! </font>";
			  			echo "<br>";
			  			echo "<font color='red'><h2><a href='Forget_Password.php'>Forget password</a></h2></font>";
			   		}
			  	  ?>
                  </div>
			 </td>
           </tr>
         </table>
	   </form>
		  
		<?php
			}
		?>
			</div>

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



