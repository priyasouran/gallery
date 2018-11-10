<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
<link rel="stylesheet" href="style.css" type="text/css">

</head>

<body>

<?Php
require 'menu.php';   
require "config.php"; // Database Connection
//if($pd=="msg_show"){echo "<SPAN STYLE=\"background: #ffff00; font: Arial 10pt;\">$msg</span>";}

//echo "$pdata";

echo "<form action='uploadck.php' method=post target='myiframe' enctype='multipart/form-data' >
<input type=hidden name=todo value='upload'>
<br><br><br>
<table border='0' width='770' cellspacing='0' cellpadding='0'>
<tr ><td width =10></td><td class='data'> Select Gallery for your photos  </td><td>
";
echo "<select name='gal_id'><option value=''>Gallery</option>";
$nt="select * from plus2net_gallery  order by gallery";

foreach ($dbo->query($nt) as $rt) {
echo "<option value='$rt[gal_id]' >$rt[gallery]</option>";
}

echo "</select></td></tr>
</table>
<table border='0' width='770' cellspacing='0' cellpadding='0'>

<tr bgcolor='#f1f1f1'><td class='data'>Images</td><td>
<input type=file name='userfile[]' multiple><input type=submit value='Upload Image'></td></tr>

</table>

</td></tr>
<tr><td width =10></td></tr>
</table>
</form>
";


echo "<iframe name='myiframe' src='uploadck.php' width=\"1000\" height=\"600\" frameBorder=\"0\"> 
</iframe>";







?>


</body>

</html>
