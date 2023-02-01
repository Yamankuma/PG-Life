<?php

    $server="localhost";
    $username="root";
    $password="";

    $conn = mysqli_connect($server, $username, $password);
    if(!$conn) {
        die ("connection failed :" .mysqli_connect_error());
        exit;
    }
    
    $name = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `pg`.`pg1` (`username`, `email`, `password`)
     VALUES ('$name','$email','$password'); ";
   $result = mysqli_query($conn,$sql);
   if(!$result){
    echo "Error :" .mysqli_error($conn);
    exit;
   }
   echo "Resistration Succeful";
   mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form  action = "submit.php" method="post">
        <p class="registration">Regitration Form</p>
        <br>
       username :<input type="text" placeholder="enter your name" class="name" name="user">
       <br>
       <br>
       <br>
       
       email :<input type="text" placeholder="enter your email id" class="emailid" name="email">
       <br>
       <br>
       <br>
       
     
       
      password :<input type="password" placeholder="enter your new password" class="password" name="password">
      <br>
      <br>
      <br>
      
      <button class="login1">submit</button>
    </form>
   <!-- INSERT INTO `pg` (`s_no.`, `username`, `email`, `password`) VALUES ('1', 'text name ', 'this@gmail.com ', 'hlo99@123');-->
</body>
</html>