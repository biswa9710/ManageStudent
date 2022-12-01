
<?php


include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta nmae="viewport"content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
       <title>REGISTRATION</title>   
</head> 
<body>
    
<div class="container">
    <form action="#" method="POST">
    <div class="title">REGISTRATION FORM</div>
    <div class="form">

        <div class="input_field">
            <label>first Name</label>
            <input type="text" class="input" name="fname"required>
        </div>
    
 <div class="input_field">
    <label>Last name</label> 
    <input type="text" class="input" name="lname"required>
</div> 

        <div class="input_field">
            <label>password</label>
            <input type="text" class="input"name="password"required>
        </div>
    
        <div class="input_field">
            <label>conform password</label>
            <input type="text" class="input" name="conpassword"required>
        </div>
        <div class="input_field">
            <label>GENDER</label>
            <div class="custom_select">
            <select name="gender" required>
                <option value="not selected">select</option>
                    <option value="male">male</option>
                    <option value="female">Female</option>
                    <option value="other">other</option>
            </select>
</div>
        </div>
        <div class="input_field">
            <label>Email</label>
            <input type="text" class="input" name="email"required>
        </div> 
        <div class="input_field">
    <label>phone number </label>
    <input type="number" class="input"name="phone"required>
</div>
       
       

        <div class="input_field">
            <label>address</address>
        </label><textarea class="textarea" name="address"required></textarea>
    </div>

    
            


    
        
        
    <div class="input_field terms">
        <label class="check">
     <input type="checkbox">
     <span class="checkmark"> agree to terms and conditions</span> </label>
            
    </div>  
    
    <div class="input_field">
    <input type="submit" value="register" class="btn" name ="register">
</div>
  
    </div>
</body>
</html>



<?php

if($_POST['register'])
{
    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password']; 
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $address = $_POST['address'];


   
     $query=  "INSERT INTO form values( '$fname','$lname','$pwd','$cpwd','$gender',
      '$email','$phone','$address')";

$data =mysqli_query($conn,$query);

if($data)
{
    echo"data inserted into database";
}
else
{
    echo"failed";  
}
 
}







?>