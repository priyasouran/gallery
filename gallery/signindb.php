<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "web");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$mobileno = mysqli_real_escape_string($link, $_REQUEST['mobileno']);
$mailid= mysqli_real_escape_string($link, $_REQUEST['mailid']);
$address= mysqli_real_escape_string($link, $_REQUEST['address']);
 
// attempt insert query execution
$sql = "INSERT INTO signin(username, password, dob,gender,mobileno,mailid,address) VALUES ('$username', '$password', '$dob','$gender','$mobileno','$mailid','$address')";
if(mysqli_query($link, $sql)){
    echo "Registration successful";
	include ('showroom.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>