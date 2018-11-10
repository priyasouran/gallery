<?Php
session_start();
echo "<!doctype html public \"-//w3c//dtd html 3.2//en\">
<html>
<head>
<title>Admin area category section</title>
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\">
<script LANGUAGE=\"JavaScript\"> 
<!-- 
function confirmSubmit(table_name,todo) {
var msg;
msg= \"Are you sure you want to \" + todo + \" \" + table_name  + \"?\";
var agree=confirm(msg);
if (agree)
return true ;
else
return false ;
}
// -->
</script>

</head><body>";
include 'check.php';

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
////  Start of deleting gallery and images /////

@$todo=$_GET['todo'];
if($todo=='delete_gal')
{
$gal_id=$_GET['gal_id'];
if(!is_numeric($gal_id)){
echo "Data Error";
exit;
}
//// delete photos
$sql="select file_name from plus2net_image where gal_id=$gal_id";
foreach ($dbo->query($sql) as $row) {
$add = "../$path_upload".$row['file_name'];
unlink($add);
$add = "../$path_thumbnail".$row['file_name'];
unlink($add);
}
/// delete records  from plus2net_image 
$count=$dbo->prepare("delete from plus2net_image where gal_id=$gal_id");
$count->execute();
//// Delete record from plus2net_gallery

$count=$dbo->prepare("delete from plus2net_gallery where gal_id=$gal_id");
$count->execute();


}// end of if 

///// end of deleting gallery and images////

$sql="select count(plus2net_image.img_id) as no,gallery,plus2net_gallery.gal_id from plus2net_gallery left join plus2net_image on plus2net_gallery.gal_id=plus2net_image.gal_id  where NOT  ISNULL( plus2net_gallery.gal_id) group by plus2net_gallery.gal_id";
$i=1;
echo "<table class='t1'>";
foreach ($dbo->query($sql) as $row) {$m=$i%2;
echo "<tr class='r$m'><td>$row[gal_id]</td><td>$row[gallery]($row[no])</td><td><a onclick=\"return confirmSubmit('$row[gallery]','delete gallery')\" href='manage-gallery.php?gal_id=$row[gal_id]&todo=delete_gal'><img src='../del.jpg'></a></td></tr>";
$i=$i+1;}
echo "</table>";
///////// End of display /////////

echo "</body></html>";
?>



