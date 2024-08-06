<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

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

<script type="text/javascript" src="jquery_min.js"></script>
   <script type="text/javascript">
      /* add needed javascript code */ 
   </script> 

</head>

<body>

<table>

<tr>

<td>

<form>
<input type="text" name="Consignment_Number" onclick="showUser(this.value)"/>
<input type="submit" name="Track" onclick="showUser(Consignment_Number)"/>
</form>
<br>
<div id="txtHint"><b>Result Display</b></div>

</td>

</tr>

</table>


<div id="data">
			<table cellpadding="0" cellspacing="2">
				<tr>
					<th>column 1</th>
					<th>column 2</th>
					<th>column 3</th>
                                        <th>column 4</th>
				</tr>
                                <?php echo getList($currentpage, $highlight); ?>
                        </table>
                        </div>
			
<p><form method="link" action="javascript:document.location.reload()"><input type="submit" value="update" onClick="this.value = 'updating...'"></form></p>


</body>
</html>
