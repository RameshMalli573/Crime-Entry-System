<?php
session_start();
require"config.php";
session_destroy();
echo"<center>you have logged out successfully:)
<a href='index.html'>click here.</a> to login!</center>";
?>