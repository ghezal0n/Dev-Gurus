<?php
$name=$_GET['name'];
$pwd=$_GET['password'];
if ($name=="and" && $pwd=="cat")
echo" OK ";
elseif ($name=="paul" && $pwd=="panda")
echo"OK";
elseif ($name=="jacky" && $pwd=="doctor")
echo"OK";
elseif ($name=="peter" && $pwd=="Dart")
echo"OK";
else
echo"invalid";
?>
