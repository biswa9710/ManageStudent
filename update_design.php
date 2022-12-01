<?php

$id =$_GET['id'];

$query ="SELECT *from form where id ='$id'";
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);

$language =$result['language'];
$language = explode(",",$language);



?>