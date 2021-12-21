<?php
require"config.php";
if(isset($_POST['submit']))
{
$crime=$_POST['crime'];
$fine=$_POST['fine'];
if($crime==""||$fine=="")
{
echo"please fill in all the information";
}
else
{
$cri_qry=$conn->query("INSERT INTO crimes(crimes,fines)VALUES('$crime','$fine')");
if($cri_qry)
{
echo"crime details registered succesfully";
}
else
{
echo"unable to register";
}
}}
?>
<html>
<table style="padding:100px;" width="300" align="center" cellpadding="0" cellspacing="1" border="1pxsolid black" body bgcolor="aqua">
<tr>
<td>
<form name="registered" method="post"
action="crimes.php">
<table style="padding:100px;" width="100" cellpadding="3" cellspacing="1" border="0" bgcolors="#FF0000"> 
<tr>
<td colspan="3"><strong><center>ENTER CRIME</center></strong></td></tr>
<tr>
<td width="78" align="center">crime</td>
<td width="6">:</td>
<td width="294"><input name="crime"
type="text" id="crime"></td>
</tr>
<tr>
<td align ="center">fine</td>
<td>:</td>
<td><input name ="fine" type="fine" id="fine"></td>
</tr>
<td></td><td></td>
<td><input type="submit" value="submit" name="submit">
    <a href="logout.php">Logout</a></td>
    
</table>
</form>
</td>
</tr>
</table>
</html>