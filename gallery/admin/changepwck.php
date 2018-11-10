<?Php
session_start();

////////////////////////////////////////////
require "../config.php";
///////////////////////////
if(@$_POST['todo']=="change_pw"){
$pw1=$_POST['pw1'];
$pw2=$_POST['pw2'];
$pw3=$_POST['pw3'];
}


$msg=""; // Message variable

$row_msg=array("msg"=>"","status_form"=>"OK");
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
//$msg .="select password from nl_admin where userid='$_SESSION[userid]'";
$count=$dbo->prepare("select password from plus2net_admin where userid= :userid");
$count->bindParam(":userid",$_SESSION[userid],PDO::PARAM_STR,100);
if($count->execute()){
$row = $count->fetch(PDO::FETCH_OBJ);
if (crypt($pw1, $row->password) === $row->password) {
}else{
$row_msg["status_form"]="NOTOK";
$msg .='Old Password is not matching';
}
}else{
$msg.=print_r($dbo->errorInfo());
}
if(strlen($pw2) < 2){
$row_msg["status_form"]="NOTOK";
$msg .='<br>Blank Password not allowed<br>';
}
if($pw3<>$pw2){
$row_msg["status_form"]="NOTOK";
$msg .='New Passwords are not matching<br>';
}
if($row_msg["status_form"]=="OK"){
////////////////////////
$cost = 10;
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
$salt = sprintf("$2a$%02d$", $cost) . $salt;
$hash = crypt($pw2, $salt);
$sql=$dbo->prepare("update plus2net_admin set password='$hash' where userid=:userid");
$sql->bindParam(":userid",$_SESSION[userid],PDO::PARAM_STR,100);
if($sql->execute()){
$msg.='Password updated';
}else{
$msg.='database Problem';
$row_msg["status_form"]="NOTOK";
}
///////////////
}

$row_msg["msg"]=$msg;
$main = array('data'=>array($row_msg)); 
echo json_encode($main); 
?>
