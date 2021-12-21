<?php
session_start();
require"config.php";
$msg="";
if(isset($_SESSION["username"]))
{
header("location:index.php");
}
if(isset($_POST['login']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];
if($user==""||$pass=="")
{
echo"please fill all the informaton";
}
else
{
$log_qry=$conn->query("select * from users where username ='$user' and password='$pass'");
$count=$log_qry->rowcount();
if($count==1)
{
$_session['username']=$user;
?>
<script type="text/javascript">
alert("login successful");
window.location='crimes.php';
</script>
<?php
}
else
{
$msg="<p>INVALIDLOGIN</p>";
}
}
}
?> 
<html>
<table style="padding:100px;" width="300" align="center" cellpadding="0" cellspacing="1" border="1pxsolid black" body bgcolor="orange">
<tr>
<form name="register" method="post" action="login.php">
<td>    
<table style="padding:100px;" width="100" cellpadding="3" cellspacing="1" border="0" bgcolors="#FF0000">    
<tr>
<td colspan="3"><strong><center>LOGIN</center></strong></td>
</tr>
<?php if($msg !=''){ ?>
<tr>
<td class="user"_textcolspan="2" align="center"><font color="#ffoooo" style="font-=size:14px;">
<?
class="user"_textcolspan="2" align="center"><font color="#ffoooo" style="font-=size:14px;">
<?php echo $msg;?>
</font></td><?tr>
<?php  }
?>
<tr>
<td width="78">username</td>
<td width="6">:</td>
<td><input type="text" name="user" id="user"></td>
</tr>
<tr>
<td >password</td>
<td >:</td>
<td> <input type="password" name="pass"
id="pass"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="login"
value="login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</html>
