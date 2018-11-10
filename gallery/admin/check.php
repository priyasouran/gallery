<?Php
if((isset($_SESSION['userid']) and strlen($_SESSION['userid']) > 4) ){

echo "Welcome $_SESSION[userid] . <a href=manage-photos.php>Manage Photos</a> . <a href=manage-gallery.php>Manage gallery</a> .  <a href=index.php>Home</a> .  <a href=changepw.php>Change Password</a> . <a href=logout.php>Logout</a> <br><br>";
}else{
echo 'Please <a href=login.php>login</a>';
exit;
}
?>