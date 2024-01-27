<?php

$con=mysqli_connect("localhost","root","root","votingsystem");

if($con)
 echo "connection succesfull";

else
die(mysql_error($con));
?>