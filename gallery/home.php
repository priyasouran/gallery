<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width,initial-scale=1">	
<title>TOWEL</title>
<style type="text/css">

.navbar{
	overfloww:hidden;
	background-color:PINK;
	font-family:BLUE;
}

.navbar a{
	float:LEFT;
	font-size:16px;
	color:red;
	background-color:BLUE;
	width=500px;
	text-align:center;
	padding:12px 40px;
	text-decoration:none;
}
.dropdown{
	float:left;
	overflow:hidden;
background-color:BLUE;
}
.dropdown .dropbtn{
	font-size:16px;
	border:none;
	outline:none;
	color:red;
	padding:14px 16px;
	background-color:inherit;
	font:inherit;
	margin:0;
}
.navbar a:hover,.dropdown:hover .dropbtn{
	background-color:green;
}

.dropdown-content
{
	display:none;
	position:absolute;
	background-color:#f9f9f9;
	min-width:160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index:1;

}

.dropdown-content a{
 	float:none;
	color:black;
	padding:12px 16px;
	display:block;
	text-algin:left;
}

.dropdown-content a:hover{
background-color:#ddd;
}

.dropdown:hover .dropdown-content{
display:block;
}
	</style>
</head>
<BR>
<font face="Viner Hand ITC" color=pink size=25><b>GALLERY</b></font><br><br>
<body>
<style>
body          
{
     background-image:url("wall.jpg");
     background-repeat:no-repeat;
     background-size:cover;
}
</style>
</body>       
<div class="navbar" width="800">
	<a href="home.php"><b>HOME</b></a>
    <a href="login.php"><b>LOGIN</b></a>
    <a href="signin.php"><b>SIGNIN</b></a>
    <a href="index.php"><b>UPLOAD</b></a>
	<a href="contact.php"><b>CONTACT</b></a>
</div>


</body>
</html>



