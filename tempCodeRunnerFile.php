<?php
$db_hostname="127.0.01";
    $db_username="root";
    $db_password="";
    $db_name="test";

    $conn = mysqli_connect(
        $db_hostname,$db_username,$db_password,$db_name
    );
    if (!$conn) {
        # code...
        echo "connection failed" .mysqli_connect_error();
        exit;
    }
    $name = $_POST['user'];
    $email =   $_POST['email'];
    
    $password =   $_POST['password'];

    $sql = "INSERT INTO user (name,email,password)VALUES
    ('$name','$email','$password')";

    $result=mysqli_querry($conn,$sql);

    if (!$result) {
        # code...
        echo "Error :" .mysqli_error($conn);
        exit;
    }
    echo "Registation Succeful";
    mysqli_close($conn);
    
?>