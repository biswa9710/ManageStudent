<?php
error_reporting(0);
$servername  = "localhost";
$username    = "root";
$password    = "";
$dbname      = "data";

$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn)
{
   // echo"1";
}

else
{
echo"connection failed";
}


?>                             