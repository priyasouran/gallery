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

 
// attempt insert query execution
$username=($_POST['username']);
$password=($_POST['password']);

$sql="SELECT username,password FROM signin WHERE username='$username' AND password='$password'";
$result=mysqli_query($link,$sql) or die(mysqli_error());
                 $dbun="";
				 $dbps="";
		while($f=mysqli_fetch_array($result))
		{
			$dbun=$f["username"];
			$dbps=$f["password"];
		}
		if($dbun==$username && $password==$dbps)
        {
            echo "hello";
			echo $username;
			include ('showroom.php');
		}
		else
		{
		   echo "sorry! please enter correct username and passsword";
	    } 

// close connection
mysqli_close($link);
?>