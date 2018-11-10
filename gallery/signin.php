<html>
<head>
<title>signin</title>
<body>
<style>
body          
{
     background-image:url("wall6.jpg");
     background-repeat:no-repeat;
     background-size:cover;
}
</style>
</body>   
<br>
<center><FONT COLOR="blue" face="Lucida Handwriting"><h1>WELCOME TO SIGNIN PAGE</h1></font></center>
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
<form action="signindb.php" method="post">
   
<b><h3><center>
        <legend>SIGN In</legend><br>
        <label>Username     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="username" placeholder=" field compulsary" autocomplete="off"></label><br><br>
        <label>Password     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="password" name="password" pattern=".{6,}" title="Six or more characters"><br><br>

        <label>Date of birth&nbsp&nbsp&nbsp&nbsp: <input type="date" name="dob"></label><br><br>
        <label>Gender       &nbsp&nbsp&nbsp: <input type="radio" name="gender" value="male" checked> Male
                                       <input type="radio" name="gender" value="female"> Female
                                       <input type="radio" name="gender" value="other"> Other <br><br>
        <label>Mobile no    &nbsp&nbsp&nbsp&nbsp&nbsp: <input type="tel" name="mobileno" maxlength="10" autocomplete="off"></label><br><br>
        <label>Mail id      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type="email" name="mailid" autocomplete="off"></label><br><br>
		<label>Address    &nbsp&nbsp&nbsp&nbsp&nbsp: <input type="text" name="address" autocomplete="off"></label><br><br>
        <input type="SUBMIT" onclick="return check(this.form)" value="SIGNIN"> 
        <input type="RESET" value="RESET">
        <b><h3>

	

</form>
</center>
</body>
</head>
</html>

