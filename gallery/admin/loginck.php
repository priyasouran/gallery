<?Php
session_start();
$msg=""; // Message variable
$row_msg=array("msg"=>"","status_form"=>"OK");
////////////////////////////////////////////
require "../config.php";
if(strlen($msg) > 0){
	$row_msg["msg"]=$msg;
$row_msg["status_form"]="NOTOK";	
$main = array('data'=>array($row_msg)); 
echo json_encode($main); 
exit;
}	
///////////////////////////
if($_POST['todo']=="login"){
$userid=$_POST['userid'];
$password=$_POST['password'];
}





//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);

$nume = $dbo->query("select count(userid) from  plus2net_admin")->fetchColumn();

if($nume<1){
$msg .='You must add one Admin userid and password before using.<br> Use the install.php file inside admin area to create userid and password ';	
$row_msg["status_form"]="NOTOK";		
}else{


$count=$dbo->prepare("select password from plus2net_admin where userid=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR,100);

if($count->execute()){

$row = $count->fetch(PDO::FETCH_OBJ);
if (crypt($password, $row->password) === $row->password) {

if(file_exists('install.php')){
$row_msg["status_form"]="NOTOK";
$msg .='For security reasons, remove install.php file from this folder. You can login after that.';
}else{
$_SESSION['userid']=$userid;
$msg .= 'success';
}
}else{
$row_msg["status_form"]="NOTOK";
$msg .='Failed to login';
}


}

} // end of if else checking number of records in admin area. 

$row_msg["msg"]=$msg;
$main = array('data'=>array($row_msg)); 
echo json_encode($main); 


?>
