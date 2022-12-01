<?php

session_start();


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content ="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="login-style.css">
<title> login page </title>
</head>
<body>

<div class="center">
               <h1>login</h1>
<form action="#" method="POST" autocomplete="off" >
<div class="form">
    <input type="text" name="username" class="textfiled" placeholder="username">
    <input type="text" name="password" class="textfiled" placeholder="password">

<div class="forgetpass"><a href ="#" class="link" onclick="message()">Forget password</a></div>

<input type="submit" name="login" value="login" class="btn">

<div class="signup">New member?<a href="#" class="link">signup</a></div>
</div>
</div>
</form>



<script >
    function message()
{

    alert("try ");
}
</script>
</body>



</html>


<?php

include("connection.php");

  if(isset($_POST['login']))
  {

    $username= $_post['username'];
    $pwd= $_post['password'];
    $qurey ="SELECT *FROM form WHERE email ='$username' && password '$pwd'";

    $data=mysqli_query($conn,$query);

    $total =mysqli_num_rows($data);

//echo $total;        

if($total == 1)
  {
    $_SESSION['user_name']=$username;

    header('location:display.php');
    
   

  }
  else
  {
    echo"login failed";
  }

  

  } 

?>
