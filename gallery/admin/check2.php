<?Php
if((isset($_SESSION['userid']) and strlen($_SESSION['userid']) > 4) and $_SESSION['userid'] == 'admin'){
}else{
echo 'Please <a href=login.php>login</a>';
exit;
}
?>