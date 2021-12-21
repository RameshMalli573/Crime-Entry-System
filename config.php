<?php
$servername="localhost";
$username="root";
$password="";
$dbname="crime-manage";
try
{
$conn=new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e)
{
echo"connection failed:" . $e->getMessage();
exit;
}
?>