<?Php
///////// Database Details , add  here  ////
$dbhost_name = "localhost";
$database = "gallery";  // Your database name
$username = "";                  //  Login user id 
$password = "";                  //   Login password
/////////// End of Database Details //////

//// Set the path for upload directory and thumbnail directory////
$path_upload="upload/";
$path_thumbnail="upload_thumb/";
////End of setting path for uploaded images ///

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
$msg.="Database Error, check config.php file<br>: " . $e->getMessage() . "<br/>";
//die();
}

?> 