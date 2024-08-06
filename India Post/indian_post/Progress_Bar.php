<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="HandheldFriendly" content="true">
  
  <title>Progress Bar</title>
</head>
<body>
<!-- Progress bar holder -->
<div id="progress" style="width:500px;border:1px solid #ccc;"></div>
<!-- Progress information -->
<div id="information" style="width"></div>
<?php
// Total processes
$i = 0;
$total = 100;

// Loop through process
for($i=1; $i<=$total; $i++){
  // Calculate the percentation
  $percent = intval($i/$total * 100)."%";
	
	if($i == 10)
	{
  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' Local Post Office";
  </script>';
}

if($i == 40)
	{
  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' R.M.S. 1";
  </script>';
}

if($i == 60)
	{
  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' R.M.S. 2";
  </script>';
}

if($i == 80)
	{
  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' G. P. O.";
  </script>';
}

if($i == 100)
	{
  // Javascript for updating the progress bar and information
  echo '<script language="javascript">
  document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
  document.getElementById("information").innerHTML="'.$i.' Local Post Office";
  </script>';
}
  // This is for the buffer achieve the minimum size in order to flush data
  echo str_repeat(' ',1024*64);

  // Send output to browser immediately
  flush();

  // Sleep one second so we can see the delay
  sleep(1);
}

// Tell user that the process is completed
echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';
?>
</body>
</html>
