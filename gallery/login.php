<html>
<head>
<title>login</title>
<body>
<style>
body          
{
     background-image:url("wall2.jpg");
     background-repeat:no-repeat;
     background-size:cover;
}
</style>
</body>   
<br>
<center><h1>PLEASANT DAY!!!</h1></center>
 <table width = "100%" border = "0">
           <tr>
            <td colspan = "2" bgcolor = "orange" width="25" height="30" align="right">
            <A HREF="home.php"><font face="baskerville old face" color=black><b> HOME</b></A>
            <A HREF="login.php"><font face="baskerville old face" color=black><b>LOGIN</b></A>
			<A HREF="signin.php"><font face="baskerville old face" color=black><b>SIGNIN</b></A>
            <A HREF="index.php"><font face="baskerville old face" color=black><b>UPLOAD</b></A>
            </td>
         </tr>
</table>
<br>
<br>
<form name="loginForm" method="post" action="logindb.php">
<b><h3><center>
        <legend>Log In</legend><br>
        <label>Username: <input type="text" name="username"></label><br><br>
        <label>Password: <input type="password" name="password"></label><br><br>
        <input type="Reset">
        <input type="submit" onclick="return check(this.form)" value="Login">
        <b><h3>
		<center><A HREF="forget.php"><font color=black size="3">Forget password</A></center>
          

</form>
</script>
</center>
</body>
</head>
</html>

