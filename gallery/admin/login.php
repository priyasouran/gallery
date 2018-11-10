<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME="DESCRIPTION" CONTENT=" ">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="../style.css" type="text/css">
<script type="text/javascript">
function ajaxFunction()
{
var httpxml;
try
{
// Firefox, Opera 8.0+, Safari
httpxml=new XMLHttpRequest();
}
catch (e)
{
// Internet Explorer
try
{
httpxml=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e)
{
try
{
httpxml=new ActiveXObject("Microsoft.XMLHTTP");
}
catch (e)
{
alert("Your browser does not support AJAX!");
return false;
}
}
}
function stateChanged() 
{
if(httpxml.readyState==4)
{
///////////////////////
//alert(httpxml.responseText); 
var myObject = JSON.parse(httpxml.responseText); 
//alert(myObject.data[0].msg);
if(myObject.data[0].status_form==="NOTOK"){ // status of form if notok
document.getElementById("msgDsp").style.borderColor='red';
document.getElementById("msgDsp").style.background='#f0f0c0';
document.getElementById("msgDsp").innerHTML=myObject.data[0].msg;

}/// end of if if form status is notok
else {        ///// Validation is passed 

document.getElementById("msgDsp").style.borderColor='blue';
document.getElementById("msgDsp").style.background='#2CFC90';
document.getElementById("msgDsp").innerHTML=" Welcome <br> ";
document.myForm.reset();
window.location='index.php';
} // end of if else if status form notok
/////// Changing the border colors /////////////
//////////////
}
}

/////////////////////////////////
function getFormData(myForm) { 
var myParameters = new Array(); 
myParameters.push("todo=" + myForm.todo.value);
myParameters.push("userid=" + myForm.userid.value); 
myParameters.push("password=" + myForm.password.value);
return myParameters.join("&"); 
} 
////////////////////////////////////////////
var url="loginck.php";
var myForm = document.forms[0]; 
var parameters=getFormData(myForm);
httpxml.onreadystatechange=stateChanged;
httpxml.open("POST", url, true)
httpxml.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
//alert(parameters);
httpxml.send(parameters) 
document.getElementById("msgDsp").innerHTML="<img src=../wait.gif>";
////////////////////////////////
}
</script>
</head>

<body>
<?Php

echo "<div id=\"msgDsp\" STYLE=\"text-align:left; FONT-SIZE: 12px;font-family: Verdana;border-style: solid;border-width: 1px;border-color:white;padding:10px;height:40px;width:550px;top:10px;z-index:1\"> Admin Login</div>";

echo "<br><br><br><form name='myForm' action='' method=post>
<table class='t1'><input type=hidden name=todo value='login'>
<tr class='r1'><td>User ID</td><td><input type=text name='userid'></td></tr>
<tr class='r0'><td>Password</td><td><input type=password name='password'></td></tr>
<tr class='r1'><td></td><td ><input type=button onClick=ajaxFunction() value='Login'></td></tr>

</table></form>

";

//////////////////////////////////////////////

echo "</body></html>";
