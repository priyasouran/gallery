<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>(Type a title for your page here)</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

<?Php
require "config.php"; // Database Connection
require 'menu.php'; 

//////////////////////////////////////////////////////Gallery //////////////////
@$eu = ($start - 0); 
$limit = 24;          // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$pro = $next + 1; 
$ant = $back + 1; 

$query=" select distinct(plus2net_image.gal_id),file_name, gallery,img_id  from plus2net_image,  plus2net_gallery where plus2net_image.gal_id=plus2net_gallery.gal_id group by plus2net_image.gal_id order by gal_id desc limit $eu,$limit";
$query2=" select distinct(plus2net_image.gal_id),file_name, gallery,img_id  from plus2net_image,  plus2net_gallery where plus2net_image.gal_id=plus2net_gallery.gal_id group by plus2net_image.gal_id order by gal_id ";

$nume = $dbo->query("$query2")->fetchColumn();
echo "<table cellspacing=0 cellpadding=0 width='100%' border=0 align=center><tr>";
$i=0;
foreach ($dbo->query($query) as $nt2) { $i=$i+1;


echo "<td valign=top class='data' width='100'><a href='gallery-photo.php?gal_id=$nt2[gal_id]'><img src='$path_thumbnail$nt2[file_name]'></a><br>$nt2[gallery]</td>";
if($i > 5){echo "</tr><tr>";
$i=0;}
}
echo "</tr></table>";

/// end of gallery and starting of paging ///////

echo "<table align = 'center' width='100%'><tr><td  class='data' width='20%'>";
if($ant >= 1) { 
print "<a href='index.php?start=$back'>PREV</a>"; 
} 
echo "</td><td class='data' align=center width='60%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='index.php?start=$i'>$l</a> ";
}
else { echo $l;}
$l=$l+1;
}


echo "</td><td class='data' align='right' width='20%'>";
if($this1 < $nume) { 
print "<a href='index.php?start=$next'>NEXT</a>";} 
echo "</td></tr></table>";

/////////////////////// end of gallery with paging ///////////////
  


?>	


</body>

</html>
