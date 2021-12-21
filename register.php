<?php
require"config.php";
if(isset($_POST['submit']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
if($user==""||$pass==""||$rpass=="")
{
echo"please fill in all the information";
}
else
{
$reg_qry=$conn->query("INSERT INTO users(username,password)VALUES('$user','$pass')");
if($reg_qry)
{
echo"user details registered succesfully";   
}
else
{
echo"unable to register";
}
}}
?>
<html>
<table style="padding:100px;" width="300" align="center" cellpadding="0" cellspacing="1" border="1pxsolid black" body bgcolor="yellow">
<tr>
<td>
<form name="registered" method="post"
action="register.php">
<table style="padding:100px;" width="100" cellpadding="3" cellspacing="1" border="0" bgcolors="#FF0000"> 
<tr>
<td colspan="3"><strong><center>REGISTRATION</center></strong></td></tr>
<tr>
<td width="78" align="center">username</td>
<td width="6">:</td>
<td width="294"><input name="user"
type="text" id="user"></td>
</tr>
<tr>
<td align ="center">password</td>
<td>:</td>
<td><input name ="pass" type="password" id="pass"></td>
</tr>
<td align="center">repeat password</td>
<td>:</td>
<td><input name="rpass" type="password" id="rpass"></td>
<tr>
<td></td><td></td>
<td><input type="submit" value="register" name="submit"></td>
<td><a href='login.php'>LOGIN.</a></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</html>