<?php
include("connection.php");
error_reporting(0);  
$query= "SELECT * FROM form";


$data = mysqli_query( $conn,$query);

$total=mysqli_num_rows($data);

$result=mysqli_fetch_assoc($data);
  
echo $result[Fname];
//echo $total;
if($total != 0)
{
    echo"table has records";

}
else
{
echo"no record found";
}
?>
