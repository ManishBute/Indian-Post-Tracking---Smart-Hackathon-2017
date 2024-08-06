<?php
session_start();
 $Login_ID=$_POST["Login_ID"];
 $Password=$_POST["Password"];
      $con=mysql_connect("localhost", "root", "");
	  mysql_select_db("indian_post_db", $con);
	  $qry=" select * from login where Login_ID='$Login_ID' and Password='$Password'";
      $result=mysql_query($qry);
      $num=mysql_num_rows($result);	
	  if ($num>=1)
	  {
	    $_SESSION["user"]=$Login_ID;
		header("location: Register_Sender.php");
	  }
	  else
	  {
	   header("location: index.php?err=1");
	  }
	  mysql_close($con);
?>