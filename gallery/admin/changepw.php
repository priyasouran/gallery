<?Php
session_start();
echo "<!doctype html public \"-//w3c//dtd html 3.2//en\">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME=\"DESCRIPTION\" CONTENT=\" \">
<META NAME=\"KEYWORDS\" CONTENT=\"\">
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\">";
?>
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
document.getElementById("msgDsp").innerHTML= myObject.data[0].msg;
document.myForm.reset();
//window.location='index.php';
} // end of if else if status form notok
/////// Changing the border colors /////////////
//////////////
}
}

/////////////////////////////////
function getFormData(myForm) { 
var myParameters = new Array(); 
myParameters.push("todo=" + myForm.todo.value);
myParameters.push("pw1=" + myForm.pw1.value); 
myParameters.push("pw2=" + myForm.pw2.value);
myParameters.push("pw3=" + myForm.pw3.value);
return myParameters.join("&"); 
} 
////////////////////////////////////////////


var url="changepwck.php";
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

<?Php
echo "</head><body>";
include 'check.php';

////////////////////////////////////////////
//require "../config.php"; // Database connection 
///////////////////////////
echo "<div id=\"msgDsp\" STYLE=\"text-align:left; FONT-SIZE: 12px;font-family: Verdana;border-style: solid;border-width: 1px;border-color:white;padding:10px;height:40px;width:550px;top:10px;z-index:1\"> Change Password</div>";

echo "<br><br><br><form name='myForm' action='' method=post>
<input type=hidden name=todo value=change_pw>
<table class='t1'>

<tr class=r1><td>Old Password</td><td><input type=password name=pw1></td></tr>
<tr class=r0><td>New Password</td><td><input type=password name=pw2></td></tr>
<tr class=r1><td>New Password</td><td><input type=password name=pw3></td></tr>
<tr class=r0><td> </td><td><input type=button onClick=ajaxFunction() value='Update'></td></tr>
</table>
</form>
";
echo "</body></html>";
?>



