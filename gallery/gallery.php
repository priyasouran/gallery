<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
<script src='gallery.js'></script>
<link rel="stylesheet" href="style.css" type="text/css">

</head>

<body onLoad=ajaxFunction('none');>

<?Php
require 'menu.php';   
require "config.php"; // Database Connection


echo "<div id=\"msgDsp\" STYLE=\"text-align:left; FONT-SIZE: 12px;font-family: Verdana;border-style: solid;border-width: 1px;border-color:white;padding:10px;height:40px;width:200px;top:10px;z-index:1\"> Add Gallery</div>";


echo "<br><br><br><br><br><form method=post name=f1 action=''>
<table class='t1'>";
echo "<tr class='r0'><td><input type=text name=gallery><input type=button onClick=ajaxFunction('add_gal') value='Add Gallery'></td></tr>";
echo "</table>
</form>";


echo "<div id=\"record-display\" STYLE=\"text-align:left; FONT-SIZE: 12px;font-family: Verdana;border-style: solid;border-width: 1px;border-color:white;padding:10px;height:40px;width:800px;top:10px;z-index:1\"> </div>";



?>


</body>

</html>
