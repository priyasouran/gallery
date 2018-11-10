<?Php
session_start();
echo "<!doctype html public \"-//w3c//dtd html 3.2//en\">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME=\"DESCRIPTION\" CONTENT=\" \">
<META NAME=\"KEYWORDS\" CONTENT=\"\">
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\">
</head><body>";
include 'check.php';

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
echo "<br><br>This is admin area to manage gallery and photos . Use the top menu to navigate to different page.";

///////////////

echo "</body></html>";
?>



